<?php

namespace App\Controller;

use App\Entity\MessageChat;
use App\Entity\MatiereCycle;    
use App\Entity\SubjectChat;
use App\Repository\ClasseRepository;
use App\Repository\SpecialiteRepository;
use App\Repository\EleveRepository;
use App\Repository\MatiereCycleRepository;
use App\Repository\SubjectChatRepository;
use App\Repository\CategorieRepository;
use App\Repository\PersonneRepository;
use App\Repository\MessageChatRepository;
use App\Service\WebSocketPusher;
use App\Service\DeepSeekAIService;
use App\Service\SubjectChatService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Security\Core\Security;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\RequestStack;

class ChatController extends AbstractController
{

    private string $jwtSecret;
    private JWTTokenManagerInterface $jwtManager;
    private RequestStack $requestStack;
    private DeepSeekAIService $aiService;
    private $subjectChatService;

    public function __construct(string $jwtSecret,
    private EleveRepository $eleveRepository,
    private SubjectChatRepository $subjectChatRepository,
    private MatiereCycleRepository $matiereCycleRepository,
    private MessageChatRepository $messageChatRepository,   
    private ClasseRepository $classeRepository,
    private EntityManagerInterface $entityManager,
    DeepSeekAIService $aiService,
    SubjectChatService $subjectChatService,
    RequestStack $requestStack)
    {
        
        $this->jwtSecret = $jwtSecret;
        $this->subjectChatRepository = $subjectChatRepository;
        $this->matiereCycleRepository = $matiereCycleRepository;
        $this->classeRepository = $classeRepository;
        $this->requestStack = $requestStack;
        $this->entityManager = $entityManager;
        $this->aiService = $aiService;
        $this->subjectChatService = $subjectChatService;
    }  

    
    #[Route('/chat', name: 'app_chat')]
    #[IsGranted('ROLE_USER')]
    public function index(): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        if (!$user) {
            return new JsonResponse(['error' => 'Utilisateur non connecté'], 401);
        }
        
        // Check profile completeness
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }
        
        // Skip premium check for teachers
        if (in_array('ROLE_INSTRUCTOR', $user->getRoles())) {
            return $this->render('student/chat/index.html.twig');
        }
        
        // Check if student has complete information (classe)
        $isProfileComplete = $student->getClasse() !== null;
        
        // For secondary cycle classes, check if the class has a specialization when needed
        if ($isProfileComplete && $student->getClasse()->getSkillLevel()) {
            $skillLevelId = $student->getClasse()->getSkillLevel()->getId();
            $secondaryCycleLevels = [5, 6, 7]; // Adjust based on your database
            
            // If student is in secondary cycle, their class must have a specialization
            if (in_array($skillLevelId, $secondaryCycleLevels) && 
                $student->getClasse()->getSpecialite() === null) {
                $isProfileComplete = false;
            }
        }
        
        // Check if premium status is required
        $isPremium = $student->isIsPremium();
        
        
        // If profile is incomplete or not premium, show setup modal
        if (!$isProfileComplete || !$isPremium) {
            return $this->render('student/chat/index.html.twig', [
                'showSetupModal' => true,
                'isPremium' => $isPremium,
                'isProfileComplete' => $isProfileComplete
            ]);
        }

        
      $this->subjectChatService->manageSubjectChats($student);

        return $this->render('student/chat/index.html.twig');
    }


    #[Route('/websocket/token/{subjectChatId}', name: 'api_websocket_token', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function generateWebSocketToken(int $subjectChatId): JsonResponse
    {
        $user = $this->getUser();

        if (!$user) {
            return new JsonResponse(['error' => 'Utilisateur non connecté'], 401);
        }

        /** @var Eleve $student */
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }
        
        // Check premium access
        $redirect = $this->checkPremiumAccess($student);
        if ($redirect instanceof RedirectResponse) {
            // For API endpoints, we should never get here due to isApiRequest check
            // but just in case, return a proper JSON response
            return new JsonResponse(['error' => 'Accès refusé : vous devez être premium pour accéder au chat', 'redirect' => 'app_student_subscriptions'], 403);
        }

        // Vérifier que la discussion existe
        $subjectChat = $this->entityManager->getRepository(SubjectChat::class)->find($subjectChatId);
        if (!$subjectChat) {
            return new JsonResponse(['error' => 'Discussion non trouvée'], 404);
        }

        // Vérifier que l'élève appartient bien à cette discussion
       /* if ($subjectChat->getCycle()->getId() !== $student->getClasse()->getSkillLevel()->getId()) {
            return new JsonResponse(['error' => 'Accès refusé à cette discussion'], 403);
        }*/

        // Générer un token sécurisé avec expiration
        $payload = [
            'user_id' => $user->getId(),
            'discussion_id' => $subjectChat->getId(),
            'exp' => time() + 3600, // Expire dans 1 heure
        ];

        // Génération du token avec Firebase JWT
        $token = JWT::encode($payload, $this->jwtSecret, 'HS256');

        return new JsonResponse(['token' => $token]);
    }

     #[Route('/subjectchat/init', name: 'api_groupchat_init')]
     public function createSubjectChats(): JsonResponse
    {

        $matiereCycles = $this->entityManager->getRepository(MatiereCycle::class)
            ->createQueryBuilder('mc')
            ->setMaxResults(15)
            ->getQuery()
            ->getResult();

        foreach ($matiereCycles as $matiereCycle) {
            $subjectChat = new SubjectChat();
            
            // Associer la matière et le cycle
            $subjectChat->setMatiere($matiereCycle->getMatiere());
            $subjectChat->setCycle($matiereCycle->getCycle());
            
            // Définir un nom basé sur la matière et le cycle
            $subjectChat->setName($matiereCycle->getMatiere()->getName());
            
            // Définir le type par défaut (enseignant ou IA)
            //$subjectChat->setType('teacher'); // Change en 'ai' si nécessaire
            
            $this->entityManager->persist($subjectChat);
        }

        $this->entityManager->flush();
        
        return $this->json(['message' => '15 SubjectChats créés avec succès !']);
    }

    #[Route('/matiereCycle/update', name: 'matiereCycle')]
    public function updateMatiereCycle(MatiereCycleRepository $MatiereCycleRepository,
                                       CategorieRepository $CategorieRepository): JsonResponse
   {

       $matiereCycles = $MatiereCycleRepository->findAll();

       foreach ($matiereCycles as $matiereCycle) {
           $matiereCycle->setName($matiereCycle->getMatiere()->getName());
           
           $this->entityManager->persist($matiereCycle);
       }


       $this->entityManager->flush();
       
       return $this->json(['message' => 'matiere cycle modifie !']);
   }

        /**
     * Récupérer les matières auxquelles un élève connecté appartient
     */
    #[Route('/api/chat/subjectChats', name: 'api_chat_subjectChats', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function getMyGroups(PersonneRepository $personneRepository): JsonResponse
    {
        $user = $this->getUser();
        //echo $user->getId();

        if (!$user) {
            return new JsonResponse(['error' => 'Utilisateur non connecté'], 401);
        }

        $personne = $personneRepository->findOneBy(['utilisateur' => $user]);

        if (!$personne) {
            return new JsonResponse(['error' => 'Aucune entité Personne trouvée pour cet utilisateur'], 403);
        }

        $eleve = $personne->getUtilisateur()->getEleve();
        if (!$eleve) {
            return new JsonResponse(['error' => 'L\'utilisateur n\'est pas un élève'], 403);
        }

        // Check premium access
        $redirect = $this->checkPremiumAccess($eleve);
        if ($redirect instanceof RedirectResponse) {
            // For API endpoints, we should never get here due to isApiRequest check
            // but just in case, return a proper JSON response
            return new JsonResponse(['error' => 'Accès refusé : vous devez être premium pour accéder au chat', 'redirect' => 'app_student_subscriptions'], 403);
        }
        
        
        $subjectChats = $this->subjectChatRepository->findByEleve($eleve->getId());

    
        $data = array_map(function ($subjectChat) use ($user) {
            return [
                'id' => $subjectChat->getId(),
                'name' => $subjectChat->getName(),
                'eleve' => $subjectChat->getEleve(),
                'cycle' => $subjectChat->getCycle(),
                'unreadCount' => $this->getUnreadCount($subjectChat)
            ];
        }, $subjectChats);

    

        return new JsonResponse($data);
    }

    #[Route('/api/chat/messages/{subjectId}', name: 'chat_messages', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function getChatMessages(int $subjectId): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return new JsonResponse(['error' => 'Unauthorized'], 403);
        }

        $criteria = [
            'subjectChat' => $subjectId,
            'isDeleted' => false
        ];
        $messages = $this->entityManager->getRepository(MessageChat::class)
            ->findBy($criteria, ['createAt' => 'ASC']);

        $lastMessage = $this->entityManager->getRepository(MessageChat::class)
            ->findOneBy(['subjectChat' => $subjectId], ['createAt' => 'DESC']);    

        $messagesArray = array_map(fn($msg) => [
            'id' => $msg->getId(),
            'content' => $msg->getContent(),
            'sender_id' => $msg->getSender()->getId(),
            'isFromAI' => $msg->isIsFromAI(),
            'createdAt' => $msg->getCreateAt()->format('Y-m-d H:i:s'),
        ], $messages);

        $lastMessageArray = $lastMessage ? [
            'id' => $lastMessage->getId(),
            'content' => $lastMessage->getContent(),
            'sender_id' => $lastMessage->getSender()->getId(),
            'isFromAI' => $lastMessage->isIsFromAI(),
            'createdAt' => $lastMessage->getCreateAt()->format('Y-m-d H:i:s'),
        ] : null;
    
        return new JsonResponse($messagesArray);
    }


    #[Route('/api/chat/message/{id}/edit', name: 'chat_edit_message', methods: ['POST'])]
    public function editMessage(Request $request, MessageChat $message, EntityManagerInterface $em, WebSocketPusher $pusher): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $newContent = $data['content'] ?? '';

        if (empty(trim($newContent))) {
            return new JsonResponse(['error' => 'Le contenu ne peut pas être vide'], 400);
        }

        $message->setContent($newContent);
        $em->flush();

        // Notifier les autres clients via WebSocket
        $pusher->pushToSubject($message->getSubjectChat(), [
            'type' => 'message_edited',
            'message_id' => $message->getId(),
            'new_content' => $newContent,
        ]);

        return new JsonResponse(['success' => true]);
    }


    /**
     * Send a message to a subject chat
     */
   // #[Route('/chat/send', name: 'app_chat_send', methods: ['POST'])]
   // #[IsGranted('ROLE_USER')]
   /* public function sendMessage(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return new JsonResponse(['error' => 'Utilisateur non connecté'], 401);
        }
        
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }
        
        // Check premium access
        $redirect = $this->checkPremiumAccess($student);
        if ($redirect instanceof RedirectResponse) {
            // For API endpoints, we should never get here due to isApiRequest check
            // but just in case, return a proper JSON response
            return new JsonResponse(['error' => 'Accès refusé : vous devez être premium pour accéder au chat', 'redirect' => 'app_student_subscriptions'], 403);
        }
        
        $data = json_decode($request->getContent(), true);
        
        if (!isset($data['chat_id']) || !isset($data['content'])) {
            return new JsonResponse(['error' => 'Incomplete data'], 400);
        }
        
        $chat = $this->subjectChatRepository->find($data['chat_id']);
        if (!$chat) {
            return new JsonResponse(['error' => 'Chat not found'], 404);
        }
        
        // Create and save the message
        $message = new MessageChat();
        $message->setContent($data['content']);
        $message->setSender($user);
        $message->setSubjectChat($chat);
        $message->setIsRead(false);
        $message->setIsFromAI(false);
        $message->setCreateAt(new \DateTimeImmutable());
        
        $entityManager->persist($message);
        $entityManager->flush();
        
        // Check if this chat should have AI responses
        $aiResponse = null;
        if ($this->isAIEnabledChat($chat)) {
            // Process AI response
            $aiMessage = $this->processAIResponse($chat, $data['content'], $user);
            
            if ($aiMessage) {
                $aiResponse = [
                    'id' => $aiMessage->getId(),
                    'content' => $aiMessage->getContent(),
                    'sender' => $user->getId(),
                    'isFromAI' => true,
                    'createdAt' => $aiMessage->getCreateAt()->format('c')
                ];
            }
        }
        
        $response = [
            'success' => true,
            'message' => [
                'id' => $message->getId(),
                'content' => $message->getContent(),
                'sender' => $user->getId(),
                'createdAt' => $message->getCreateAt()->format('c')
            ]
        ];
        
        if ($aiResponse) {
            $response['aiResponse'] = $aiResponse;
        }
        
        return new JsonResponse($response);
    }*/
    
    /**
     * Process and generate an AI response for a message
     */
  /*  private function processAIResponse(SubjectChat $chat, string $userMessage, $user): ?MessageChat
    {
        try {
            // Get recent messages for context (last 10)
            $recentMessages = $this->messageChatRepository->findBy(
                ['subjectChat' => $chat],
                ['createAt' => 'DESC'],
                10
            );
            
            // Format messages for the AI
            $messageHistory = array_map(function($msg) {
                return [
                    'content' => $msg->getContent(),
                    'isFromAI' => $msg->isIsFromAI()
                ];
            }, array_reverse($recentMessages));
            
            // Get subject name
            $subjectName = $chat->getMatiere()->getName();
            
            // Generate AI response
            $aiResponse = $this->aiService->generateResponse(
                $userMessage,
                $subjectName,
                $messageHistory
            );
            
            // Create and save AI message
            $message = new MessageChat();
            $message->setContent($aiResponse);
            $message->setSender($user); // Use the same user but mark as AI
            $message->setSubjectChat($chat);
            $message->setIsRead(false);
            $message->setIsFromAI(true);
            $message->setCreateAt(new \DateTimeImmutable());
            
            $this->entityManager->persist($message);
            $this->entityManager->flush();
            
            return $message;
        } catch (\Exception $e) {
            // Log the error
            error_log('Error generating AI response: ' . $e->getMessage());
            return null;
        }
    }*/
    
    /**
     * Determine if a subject chat should have AI responses
     * This is a placeholder implementation - you might want to add a field to the SubjectChat entity
     */
    private function isAIEnabledChat(SubjectChat $chat): bool
    {
        // For now, we'll enable AI for all chats
        // In the future, you might want to check a field on the SubjectChat entity
        return true;
    }
    
    /**
     * Get messages for a specific chat
     */
   // #[Route('/chat/messages/{chatId}', name: 'app_chat_messages', methods: ['GET'])]
   // #[IsGranted('ROLE_USER')]
   /* public function getMessages(int $chatId, EntityManagerInterface $entityManager): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return new JsonResponse(['error' => 'Utilisateur non connecté'], 401);
        }
        
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }
        
        // Check premium access
        $redirect = $this->checkPremiumAccess($student);
        if ($redirect instanceof RedirectResponse) {
            // For API endpoints, we should never get here due to isApiRequest check
            // but just in case, return a proper JSON response
            return new JsonResponse(['error' => 'Accès refusé : vous devez être premium pour accéder au chat', 'redirect' => 'app_student_subscriptions'], 403);
        }
        
        $chat = $this->subjectChatRepository->find($chatId);
        if (!$chat) {
            return new JsonResponse(['error' => 'Chat not found'], 404);
        }
        
        // Get messages
        $messages = $this->messageChatRepository->findBy(['subjectChat' => $chat], ['createdAt' => 'ASC']);
        
        // Mark messages as read
        foreach ($messages as $message) {
            if (!$message->isIsRead() && $message->getSender()->getId() !== $user->getId()) {
                $message->setIsRead(true);
            }
        }
        $entityManager->flush();
        
        $data = array_map(function($message) {
            return [
                'id' => $message->getId(),
                'content' => $message->getContent(),
                'sender' => $message->getSender()->getId(),
                'isFromAI' => $message->isIsFromAI(),
                'isRead' => $message->isIsRead(),
                'createdAt' => $message->getCreateAt()->format('c')
            ];
        }, $messages);
        
        return new JsonResponse($data);
    }*/
    
    /**
     * Get unread message count for a chat
     */
    private function getUnreadCount($chat): int
    {
        //$teacher = "null";
        return $this->messageChatRepository->createQueryBuilder('m')
            ->select('COUNT(m.id)')
            ->where('m.subjectChat = :chat')
            //->andWhere('m.teacherPersona != :teacher')
            //->andWhere('m.sender != :user')
            ->andWhere('m.isRead = :isRead')
            ->setParameter('chat', $chat)
           // ->setParameter('teacher', $teacher)
           // ->setParameter('user', $user)
            ->setParameter('isRead', false)
            ->getQuery()
            ->getSingleScalarResult();
    }
    
    /**
     * Check if a student has premium access to chat features
     * 
     * @param object $student The student entity to check
     * @throws AccessDeniedHttpException If the student doesn't have premium access
     * @return RedirectResponse|null Returns a redirect response if student is not premium, null otherwise
     */
    private function checkPremiumAccess($student): ?RedirectResponse
    {
        // Get the current user
        $user = $this->getUser();
        
        // Skip premium check for teachers/instructors
        if ($user && in_array('ROLE_INSTRUCTOR', $user->getRoles())) {
            return null;
        }
        
        // Only check premium status for students
        if ($student && !$student->isIsPremium()) {
            // For API endpoints, throw an exception
            if ($this->isApiRequest()) {
                throw new AccessDeniedHttpException('Accès refusé : vous devez être premium pour accéder au chat');
            }
            
            // For regular web requests, redirect to subscription page
            $this->addFlash('error', 'Accès refusé : vous devez être premium pour accéder au chat');
            return $this->redirectToRoute('app_plan');
        }
        
        return null;
    }
    
    /**
     * Determine if the current request is an API request
     * 
     * @return bool True if this is an API request, false otherwise
     */
    private function isApiRequest(): bool
    {
        $request = $this->requestStack->getCurrentRequest();
        
        // Check if it's an AJAX request or if it expects JSON response
        return $request->isXmlHttpRequest() || 
               $request->getRequestFormat() === 'json' ||
               strpos($request->getPathInfo(), '/api/') === 0 ||
               in_array('application/json', $request->getAcceptableContentTypes());
    }

    #[Route('/student/chat/update-profile', name: 'app_student_chat_update_profile', methods: ['POST'])]
    public function updateProfile(Request $request, EleveRepository $eleveRepository, ClasseRepository $classeRepository, SpecialiteRepository $specialiteRepository, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException();
        }

        $student = $user->getEleve();
        if (!$student) {
            throw $this->createAccessDeniedException();
        }

        $classeId = $request->request->get('classe');
        $specialiteId = $request->request->get('specialite');
        
        $success = false;
        $message = '';
        
        try {
            if ($classeId) {
                $classe = $classeRepository->find($classeId);
                if (!$classe) {
                    $message = 'Class not found';
                } else {
                    $student->setClasse($classe);
                    
                    // If specialite is provided and the class requires it
                    if ($specialiteId) {
                        $specialite = $specialiteRepository->find($specialiteId);
                        if ($specialite) {
                            $student->setSpecialite($specialite);
                        }
                    } else {
                        // Clear specialite if not provided
                        $student->setSpecialite(null);
                    }
                    
                    $entityManager->persist($student);
                    $entityManager->flush();
                    
                    $success = true;
                    $message = 'Profile updated successfully';
                }
            } else {
                $message = 'Class ID is required';
            }
        } catch (\Exception $e) {
            // Log the error for debugging
            error_log('Error updating profile: ' . $e->getMessage());
            $message = 'An error occurred while updating your profile. Please try again.';
        }
        
        // Check if student has complete information (classe)
        $isProfileComplete = $student->getClasse() !== null;
        
        // For secondary cycle classes, check if the class has a specialization when needed
        if ($isProfileComplete && $student->getClasse()->getSkillLevel()) {
            $skillLevelId = $student->getClasse()->getSkillLevel()->getId();
            $secondaryCycleLevels = [5, 6, 7]; // Adjust based on your database
            
            // If student is in secondary cycle, their class must have a specialization
            if (in_array($skillLevelId, $secondaryCycleLevels) && 
                $student->getClasse()->getSpecialite() === null) {
                $isProfileComplete = false;
            }
        }
        
        // Check premium status
        $isPremium = $student->isIsPremium();
        
        // Profile is only fully complete if both class is set and premium status is true
        $isFullyComplete = $isProfileComplete && $isPremium;
        
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success' => $success, 
                'message' => $message,
                'isProfileComplete' => $isProfileComplete,
                'isPremium' => $isPremium,
                'isFullyComplete' => $isFullyComplete,
                'needsPremium' => $isProfileComplete && !$isPremium // Flag to indicate premium is needed
            ]);
        }
        
        if ($success) {
            $this->addFlash('success', $message);
        } else {
            $this->addFlash('error', $message);
        }
        
        return $this->redirectToRoute('app_chat');
    }
}
