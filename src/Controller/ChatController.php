<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\GroupChat;
use App\Entity\MessageChat;
use App\Entity\User;
use App\Entity\Eleve;
use App\Entity\MatiereCycle;
use App\Entity\Specialite;
use App\Repository\GroupChatRepository;
use App\Repository\MessageChatRepository;
use App\Repository\EleveRepository;
use App\Repository\MatiereCycleRepository;
use App\Repository\ClasseRepository;
use App\Repository\SpecialiteRepository;
use App\Repository\PersonneRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Firebase\JWT\JWT;

class ChatController extends AbstractController
{
    private string $jwtSecret;

    public function __construct(
        string $jwtSecret,
        private EntityManagerInterface $entityManager,
        private MessageChatRepository $messageChatRepository,
        private GroupChatRepository $groupChatRepository,
        private EleveRepository $eleveRepository,
        private MatiereCycleRepository $matiereCycleRepository,
        private ClasseRepository $classeRepository,
        private SpecialiteRepository $specialiteRepository,
        private PersonneRepository $personneRepository
    ) {
        $this->jwtSecret = $jwtSecret;
    }

    #[Route('/chat', name: 'app_chat')]
    #[IsGranted('ROLE_USER')]
    public function index(): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // For students, check premium status and setup
        if ($this->isGranted('ROLE_STUDENT')) {
            $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
            if (!$student) {
                throw $this->createAccessDeniedException('Student account not found.');
            }

            // Check premium status
            if (!$student->isIsPremium()) {
                $this->addFlash('warning', 'You need a premium account to access chat features.');
                return $this->redirectToRoute('app_premium_plans');
            }

            // Get all classes and specializations for setup if needed
            $classes = $this->classeRepository->findAll();
            $specialites = $this->specialiteRepository->findAll();

            // Check if student needs setup
            $needsSetup = !$student->getClasse() || !$student->getSpecialite();
            
            // Only get groups if student is fully set up
            $groups = [];
            if (!$needsSetup) {
                $groups = $this->groupChatRepository->findByStudent($student);
            }

            return $this->render('front/chat/index.html.twig', [
                'student' => $student,
                'classes' => $classes,
                'specialites' => $specialites,
                'groups' => $groups,
                'needsSetup' => $needsSetup
            ]);
        }

        // For non-students, show appropriate interface
        return $this->render('front/chat/index.html.twig');
    }

    /**
     * Entry point for AI Teacher Chats
     */
    #[Route('/chat/teachers', name: 'app_teacher_chat')]
    #[IsGranted('ROLE_STUDENT')]
    public function teacherChat(): Response
    {
        $user = $this->getUser();
        /** @var Eleve|null $student */
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }

        // Check premium status
        if (!$student->isIsPremium()) {
            $this->addFlash('warning', 'You need a premium account to access AI teacher chats.');
            return $this->redirectToRoute('app_premium_plans');
        }

        // Get available subjects
        $availableSubjects = $this->matiereCycleRepository->findAvailableSubjects(
            $student->getClasse(),
            $student->getClasse()?->getSpecialite()
        );

        // If no subjects available, show appropriate message
        if (empty($availableSubjects)) {
            $this->addFlash('warning', 'No subjects are currently available for your class level.');
            return $this->redirectToRoute('app_student_home');
        }

        // Redirect to the first available subject
        return $this->redirectToRoute('app_subject_chat', [
            'id' => $availableSubjects[0]->getId()
        ]);
    }

    /**
     * Individual subject chat interface
     */
    #[Route('/chat/subject/{id}', name: 'app_subject_chat')]
    #[IsGranted('ROLE_STUDENT')]
    public function subjectChat(MatiereCycle $subject): Response
    {
        $user = $this->getUser();
        /** @var Eleve|null $student */
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }

        // Get all subjects available to the student
        $availableSubjects = $this->matiereCycleRepository->findAvailableSubjects(
            $student->getClasse(),
            $student->getClasse()?->getSpecialite()
        );

        // Verify student has access to this subject
        if (!in_array($subject, $availableSubjects)) {
            throw $this->createAccessDeniedException('You do not have access to this subject.');
        }

        // Get chat history
        $messages = $this->messageChatRepository->findSubjectChatMessages(
            $student,
            $subject,
            50 // Limit to last 50 messages
        );

        // Generate JWT token for WebSocket authentication
        $payload = [
            'user_id' => $user->getId(),
            'student_id' => $student->getId(),
            'subject_id' => $subject->getId(),
            'exp' => time() + 3600 // 1 hour expiration
        ];
        
        $token = JWT::encode($payload, $this->jwtSecret, 'HS256');

        return $this->render('front/chat/subject_chat.html.twig', [
            'current_subject' => $subject,
            'available_subjects' => $availableSubjects,
            'messages' => $messages,
            'student_token' => $token,
            'websocket_url' => $this->getParameter('websocket_url')
        ]);
    }

    #[Route('/chat/setup', name: 'app_chat_setup', methods: ['POST'])]
    #[IsGranted('ROLE_STUDENT')]
    public function setup(Request $request): JsonResponse
    {
        try {
            $data = json_decode($request->getContent(), true);
            
            if (!isset($data['classe']) || !isset($data['specialite'])) {
                throw new \InvalidArgumentException('Both class and specialization are required');
            }

            /** @var User $user */
            $user = $this->getUser();
            $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
            
            if (!$student) {
                throw new \RuntimeException('Student not found');
            }

            $classe = $this->classeRepository->find($data['classe']);
            $specialite = $this->specialiteRepository->find($data['specialite']);

            if (!$classe || !$specialite) {
                throw new \InvalidArgumentException('Invalid class or specialization selected');
            }

            $student->setClasse($classe);
            $student->setSpecialite($specialite);

            $this->entityManager->flush();

            return new JsonResponse(['success' => true]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false, 
                'error' => $e->getMessage()
            ], 400);
        }
    }

    #[Route('/chat/send', name: 'app_chat_send', methods: ['POST'])]
    #[IsGranted('ROLE_STUDENT')]
    public function sendMessage(Request $request): JsonResponse
    {
        $user = $this->getUser();
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        
        if (!$student || !$student->isIsPremium()) {
            return new JsonResponse(['error' => 'Premium account required'], 403);
        }
       
        $data = json_decode($request->getContent(), true);

        if (!isset($data['group_id']) || !isset($data['content'])) {
            return new JsonResponse(['error' => 'Incomplete data'], 400);
        }

        $groupChat = $this->groupChatRepository->find($data['group_id']);
        if (!$groupChat) {
            return new JsonResponse(['error' => 'Group not found'], 404);
        }

        $message = new MessageChat();
        $message->setContent($data['content']);
        $message->setSender($user);
        $message->setGroupChat($groupChat);
        $message->setIsRead(false);
        $message->setIsFromAI(false);

        $this->entityManager->persist($message);
        $this->entityManager->flush();

        return new JsonResponse(['success' => true]);
    }

    #[Route('/chat/groups', name: 'app_chat_groups', methods: ['GET'])]
    #[IsGranted('ROLE_STUDENT')]
    public function getGroups(): JsonResponse
    {
        $user = $this->getUser();
        /** @var Eleve|null $student */
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }

        $groups = $this->groupChatRepository->findByStudent($student);
        
        return new JsonResponse([
            'groups' => array_map(function(GroupChat $group) {
                return [
                    'id' => $group->getId(),
                    'name' => $group->getName(),
                    'subject' => $group->getMatiereCycle()->getNom(),
                    'cycle' => $group->getCycle(),
                    'lastMessage' => $this->getLastMessage($group),
                    'unreadCount' => $this->getUnreadCount($group)
                ];
            }, $groups)
        ]);
    }

    #[Route('/chat/messages/{group}', name: 'app_chat_messages', methods: ['GET'])]
    #[IsGranted('ROLE_STUDENT')]
    public function getMessages(GroupChat $group): JsonResponse
    {
        $user = $this->getUser();
        /** @var Eleve|null $student */
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }
        
        $messages = $this->messageChatRepository->findByGroup($group);
        
        // Mark messages as read
        foreach ($messages as $message) {
            if (!$message->isRead()) {
                $message->setIsRead(true);
            }
        }
        $this->entityManager->flush();
        
        return new JsonResponse([
            'messages' => array_map(function(MessageChat $message) {
                return [
                    'id' => $message->getId(),
                    'content' => $message->getContent(),
                    'sender' => [
                        'id' => $message->getSender()->getId(),
                        'name' => $message->getSender()->getUsername()
                    ],
                    'isFromAI' => $message->isFromAI(),
                    'isRead' => $message->isRead(),
                    'createdAt' => $message->getCreateAt()->format('c')
                ];
            }, $messages)
        ]);
    }

    #[Route('/chat/websocket/token', name: 'api_websocket_token', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function generateWebSocketToken(): JsonResponse
    {
        $user = $this->getUser();

        if (!$user) {
            return new JsonResponse(['error' => 'User not authenticated'], 401);
        }

        $payload = [
            'user_id' => $user->getId(),
            'exp' => time() + 3600 // 1 hour expiration
        ];

        $token = JWT::encode($payload, $this->jwtSecret, 'HS256');

        return new JsonResponse(['token' => $token]);
    }

    private function getLastMessage(GroupChat $group): ?array
    {
        $message = $this->messageChatRepository->findLastMessageByGroup($group);
        if (!$message) {
            return null;
        }

        return [
            'content' => $message->getContent(),
            'sender' => $message->getSender()->getUsername(),
            'createdAt' => $message->getCreateAt()->format('c')
        ];
    }

    private function getUnreadCount(GroupChat $group): int
    {
        return $this->messageChatRepository->countUnreadByGroup($group);
    }
}
