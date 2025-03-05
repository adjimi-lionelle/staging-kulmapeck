<?php

namespace App\Controller;

use App\Entity\MessageChat;
use App\Entity\MatiereCycle;    
use App\Entity\SubjectChat;
use App\Repository\EleveRepository;
use App\Repository\SubjectChatRepository;
use App\Repository\PersonneRepository;
use App\Repository\MessageChatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Security;
use Doctrine\ORM\EntityManagerInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Psr\Log\LoggerInterface;

class ChatController extends AbstractController
{

    private string $jwtSecret;
    private JWTTokenManagerInterface $jwtManager;
    private RequestStack $requestStack;

    public function __construct(string $jwtSecret,
    private EleveRepository $eleveRepository,
    private SubjectChatRepository $subjectChatRepository,
    private MessageChatRepository $messageChatRepository,
    RequestStack $requestStack)
    {
        
        $this->jwtSecret = $jwtSecret;
        $this->subjectChatRepository = $subjectChatRepository;
        $this->requestStack = $requestStack;
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
        
        // If profile is incomplete, show setup modal
        if (!$isProfileComplete) {
            return $this->render('student/chat/index.html.twig', [
                'showSetupModal' => true,
                'isPremium' => $student->isIsPremium(),
                'isProfileComplete' => $isProfileComplete
            ]);
        }
        
        // Check premium access
        $redirect = $this->checkPremiumAccess($student);
        if ($redirect instanceof RedirectResponse) {
            return $redirect;
        }
        
        return $this->render('student/chat/index.html.twig');
    }


     /* Création d'un token temporaire */
    /* #[Route('/websocket/token', name: 'api_websocket_token', methods: ['GET'])]*/
   /*  #[IsGranted('ROLE_USER')]*/
    /* public function generateWebSocketToken(): JsonResponse
     {
        $user = $this->getUser();
 
         if (!$user) {
             return new JsonResponse(['error' => 'Utilisateur non connecté'], 401);
         }

          /** @var Eleve $student */
       /* $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }
 
         // Générer un token sécurisé avec expiration
         $payload = [
             'user_id' => $student->getId(),
             'exp' => time() + 3600,
         ];
 
         // Génération du token avec Firebase JWT
         $token = JWT::encode($payload, $this->jwtSecret, 'HS256');
 
         return new JsonResponse(['token' => $token]);
     }*/

    #[Route('/websocket/token/{subjectChatId}', name: 'api_websocket_token', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function generateWebSocketToken(int $subjectChatId, EntityManagerInterface $entityManager): JsonResponse
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
        $subjectChat = $entityManager->getRepository(SubjectChat::class)->find($subjectChatId);
        if (!$subjectChat) {
            return new JsonResponse(['error' => 'Discussion non trouvée'], 404);
        }

        // Vérifier que l'élève appartient bien à cette discussion
       /* if ($subjectChat->getCycle()->getId() !== $student->getClasse()->getSkillLevel()->getId()) {
            return new JsonResponse(['error' => 'Accès refusé à cette discussion'], 403);
        }*/

        // Générer un token sécurisé avec expiration
        $payload = [
            'user_id' => $student->getId(),
            'discussion_id' => $subjectChat->getId(),
            'exp' => time() + 3600, // Expire dans 1 heure
        ];

        // Génération du token avec Firebase JWT
        $token = JWT::encode($payload, $this->jwtSecret, 'HS256');

        return new JsonResponse(['token' => $token]);
    }


     #[Route('/subjectchat/init', name: 'api_groupchat_init')]
     public function createSubjectChats(EntityManagerInterface $entityManager): JsonResponse
    {

        $matiereCycles = $entityManager->getRepository(MatiereCycle::class)
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
            
            $entityManager->persist($subjectChat);
        }

        $entityManager->flush();
        
        return $this->json(['message' => '15 SubjectChats créés avec succès !']);
    }

        /**
     * Récupérer les groupes auxquels un élève connecté appartient/ completer  
     * cette fonction pour envoyer le nombbre de message non lu pr un user connecté dans chacun de ses groupe 
     * exempele groupe 1 nombre de message non lu groupe 2 nombre de message non lu groupe 3 nombre de message non lu
     */
    #[Route('/subjectChats', name: 'api_chat_subjectChats', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function getMyGroups(SubjectChatRepository $groupChatRepository, EleveRepository $eleveRepository, LoggerInterface $logger): JsonResponse
    {
        $user = $this->getUser();
        $logger->info('API: /subjectChats request received', ['user_id' => $user ? $user->getId() : null]);

        if (!$user) {
            $logger->error('API: User not authenticated');
            return new JsonResponse(['error' => 'Utilisateur non connecté'], 401);
        }

        // For teachers, return their subjects
        if (in_array('ROLE_INSTRUCTOR', $user->getRoles())) {
            $logger->info('API: User is an instructor, fetching all subjects');
            $subjectChats = $groupChatRepository->findAll();
            
            $data = array_map(function ($subjectChat) use ($user) {
                return [
                    'id' => $subjectChat->getId(),
                    'name' => $subjectChat->getName(),
                    'type' => $subjectChat->getType(),
                    'unreadCount' => $this->getUnreadCount($subjectChat, $user)
                ];
            }, $subjectChats);
            
            $logger->info('API: Returning subjects for instructor', ['count' => count($data)]);
            return new JsonResponse($data);
        }

        // For students
        $logger->info('API: User is a student, fetching student data');
        $student = $eleveRepository->findOneBy(['utilisateur' => $user]);
        
        if (!$student) {
            $logger->error('API: Student account not found', ['user_id' => $user->getId()]);
            return new JsonResponse(['error' => 'Student account not found'], 403);
        }
        
        // Check premium access
        $logger->info('API: Checking premium access for student', ['student_id' => $student->getId()]);
        $redirect = $this->checkPremiumAccess($student);
        if ($redirect instanceof RedirectResponse) {
            $logger->warning('API: Premium access denied for student', ['student_id' => $student->getId()]);
            return new JsonResponse([
                'error' => 'Accès refusé : vous devez être premium pour accéder au chat', 
                'redirect' => 'app_student_subscriptions'
            ], 403);
        }
        
        // Check if student has a class
        $classe = $student->getClasse();
        if (!$classe) {
            $logger->error('API: Student has no class', ['student_id' => $student->getId()]);
            return new JsonResponse(['error' => 'Aucune classe trouvée'], 400);
        }
        
        $skill_level = $classe->getSkillLevel()->getId();
        
        if ($skill_level >= 5 && $skill_level <= 7) {
            $subjectChats = $groupChatRepository->findBy(['cycle' => 2]);
        } elseif ($skill_level == 1 || $skill_level ==2) {
            $subjectChats = $groupChatRepository->findBy(['cycle' => 1]);
        } elseif ($skill_level == 3 || $skill_level == 4) {
            if($classe->getName() == "Quatrième ALL- 4ème ALL" || $classe->getName() == "Troisième ALL- 3ème ALL" || $classe->getName() == "Troisième Bilingue Allemand- 3ème BIL. ALL"){
                $subjectChats = $groupChatRepository->createQueryBuilder('sc')
                ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                ->setParameter('cycle1', 1)
                ->setParameter('cycle2', 11)
                ->getQuery()
                ->getResult();
            } elseif ($classe->getName() == "Quatrième ESP- 4ème ESP" || $classe->getName() == "Troisième ESP- 3ème ESP" || $classe->getName() == "Troisième Bilingue Espagnol- 3ème BIL. ESP"){
                $subjectChats = $groupChatRepository->createQueryBuilder('sc')
                ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                ->setParameter('cycle1', 1)
                ->setParameter('cycle2', 12)
                ->getQuery()
                ->getResult();
            } elseif ($classe->getName() == "Troisième Chinois- 3ème Chinois"){
                $subjectChats = $groupChatRepository->createQueryBuilder('sc')
                ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                ->setParameter('cycle1', 1)
                ->setParameter('cycle2', 14)
                ->getQuery()
                ->getResult();
            }
        
        } else {
            return new JsonResponse(['error' => 'Niveau de compétence non valide'], 400);
        }

    
        $data = array_map(function ($subjectChat) use ($user) {
                return [
                    'id' => $subjectChat->getId(),
                    'name' => $subjectChat->getName(),
                    'type' => $subjectChat->getType(),
                'cycle' => $subjectChat->getCycle(),
                    'unreadCount' => $this->getUnreadCount($subjectChat, $user)
                ];
            }, $subjectChats);
            
            $logger->info('API: Returning subjects for student', ['count' => count($data)]);
            return new JsonResponse($data);
        } catch (\Exception $e) {
            $logger->error('API: Error fetching subjects', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return new JsonResponse(['error' => 'Error fetching subjects: ' . $e->getMessage()], 500);
        }
    }
    
    /**
     * Send a message to a subject chat
     */
    #[Route('/chat/send', name: 'app_chat_send', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function sendMessage(Request $request, EntityManagerInterface $entityManager): JsonResponse
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
        $message->setCreatedAt(new \DateTimeImmutable());
        
        $entityManager->persist($message);
        $entityManager->flush();
        
        return new JsonResponse([
            'success' => true,
            'message' => [
                'id' => $message->getId(),
                'content' => $message->getContent(),
                'sender' => $user->getId(),
                'createdAt' => $message->getCreatedAt()->format('c')
            ]
        ]);
    }
    
    /**
     * Get messages for a specific chat
     */
    #[Route('/chat/messages/{chatId}', name: 'app_chat_messages', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function getMessages(int $chatId, EntityManagerInterface $entityManager): JsonResponse
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
                'createdAt' => $message->getCreatedAt()->format('c')
            ];
        }, $messages);
        
        return new JsonResponse($data);
    }
    
    /**
     * Get unread message count for a chat
     */
    private function getUnreadCount($chat, $user): int
    {
        return $this->messageChatRepository->createQueryBuilder('m')
            ->select('COUNT(m.id)')
            ->where('m.subjectChat = :chat')
            ->andWhere('m.sender != :user')
            ->andWhere('m.isRead = :isRead')
            ->setParameter('chat', $chat)
            ->setParameter('user', $user)
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
            return $this->redirectToRoute('app_student_subscriptions');
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
}
