<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\SubjectChat;
use App\Entity\MessageChat;
use App\Entity\User;
use App\Entity\Eleve;
use App\Entity\MatiereCycle;
use App\Entity\Specialite;
use App\Repository\SubjectChatRepository;
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
        string $jwtSecretKey,
        private EntityManagerInterface $entityManager,
        private MessageChatRepository $messageChatRepository,
        private SubjectChatRepository $subjectChatRepository,
        private EleveRepository $eleveRepository,
        private MatiereCycleRepository $matiereCycleRepository,
        private ClasseRepository $classeRepository,
        private SpecialiteRepository $specialiteRepository,
        private PersonneRepository $personneRepository
    ) {
        $this->jwtSecret = $jwtSecretKey;
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
            $needsSetup = !$student->getClasse() || !$student->getClasse()?->getSpecialite();
            
            // Only get active subject chats if student is fully set up
            $chats = [];
            if (!$needsSetup) {
                $chats = $this->subjectChatRepository->findByStudent($student);
            }

            return $this->render('front/chat/index.html.twig', [
                'student' => $student,
                'classes' => $classes,
                'specialites' => $specialites,
                'chats' => $chats,
                'needsSetup' => $needsSetup
            ]);
        }

        // For non-students, show appropriate interface
        return $this->render('front/chat/index.html.twig');
    }

    /**
     * Entry point for Subject Teacher Chats
     */
    #[Route('/chat/subject/{subject}', name: 'app_subject_chat')]
    #[IsGranted('ROLE_STUDENT')]
    public function subjectChat(MatiereCycle $subject): Response
    {
        $user = $this->getUser();
        /** @var Eleve|null $student */
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }

        // Check if student has access to this subject
        $availableSubjects = $this->matiereCycleRepository->findAvailableSubjects($student);
        if (!in_array($subject, $availableSubjects)) {
            throw $this->createAccessDeniedException('You do not have access to this subject.');
        }

        // Get or create subject chat
        $chat = $this->subjectChatRepository->findOrCreateByStudentAndSubject($student, $subject);

        // Get chat history
        $messages = $this->messageChatRepository->findSubjectChatMessages($chat);

        // Generate JWT token for WebSocket authentication
        $token = $this->generateWebSocketToken($student, $chat);

        return $this->render('front/chat/subject_chat.html.twig', [
            'chat' => $chat,
            'messages' => $messages,
            'token' => $token
        ]);
    }

    /**
     * Individual subject chat interface
     */
    #[Route('/chat/subject/{id}', name: 'app_subject_chat')]
    #[IsGranted('ROLE_STUDENT')]
    public function subjectChatInterface(MatiereCycle $subject): Response
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

        // Get or create subject chat group
        $chat = $this->subjectChatRepository->findOrCreateByStudentAndSubject($student, $subject);

        // Get chat history
        $messages = $this->messageChatRepository->findSubjectChatMessages($chat);

        // Generate JWT token for WebSocket authentication
        $payload = [
            'user_id' => $user->getId(),
            'student_id' => $student->getId(),
            'subject_id' => $subject->getId(),
            'chat_id' => $chat->getId(),
            'exp' => time() + 3600 // 1 hour expiration
        ];
        
        $token = JWT::encode($payload, $this->jwtSecret, 'HS256');

        // Get teacher persona for this subject
        $teacherPersona = [
            'name' => $this->getTeacherName($subject->getMatiere()),
            'avatar' => $this->getTeacherAvatar($subject->getMatiere())
        ];

        return $this->render('front/chat/subject_chat.html.twig', [
            'current_subject' => [
                'id' => $subject->getId(),
                'name' => $subject->getMatiere()->getName(),
                'teacherPersona' => $teacherPersona
            ],
            'available_subjects' => array_map(function($s) {
                return [
                    'id' => $s->getId(),
                    'name' => $s->getMatiere()->getName(),
                    'icon' => $this->getSubjectIcon($s->getMatiere()),
                    'teacherPersona' => [
                        'name' => $this->getTeacherName($s->getMatiere()),
                        'avatar' => $this->getTeacherAvatar($s->getMatiere())
                    ]
                ];
            }, $availableSubjects),
            'messages' => $messages,
            'student_token' => $token,
            'websocket_url' => $this->getParameter('websocket_url')
        ]);
    }

    private function getTeacherName(Categorie $subject): string
    {
        $teacherNames = [
            'MATHEMATIQUES' => 'Sophie Laurent',
            'SCIENCE DE LA VIE ET DE LA TERRE (SVT)' => 'Marc Dubois',
            'PHYSIQUES' => 'Claire Martin',
            'FRANCAIS' => 'Pierre Dupont',
            'ANGLAIS' => 'John Smith'
        ];

        return $teacherNames[$subject->getName()] ?? 'Prof. ' . $subject->getName();
    }

    private function getTeacherAvatar(Categorie $subject): string
    {
        // Default avatars based on subject
        $avatars = [
            'MATHEMATIQUES' => 'math-teacher.png',
            'SCIENCE DE LA VIE ET DE LA TERRE (SVT)' => 'biology-teacher.png',
            'PHYSIQUES' => 'physics-teacher.png',
            'FRANCAIS' => 'french-teacher.png',
            'ANGLAIS' => 'english-teacher.png'
        ];

        return $avatars[$subject->getName()] ?? 'default-teacher.png';
    }

    private function getSubjectIcon(Categorie $subject): string
    {
        $icons = [
            'MATHEMATIQUES' => 'calculator',
            'SCIENCE DE LA VIE ET DE LA TERRE (SVT)' => 'leaf',
            'PHYSIQUES' => 'atom',
            'FRANCAIS' => 'book',
            'ANGLAIS' => 'globe'
        ];

        return $icons[$subject->getName()] ?? 'book';
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

        if (!isset($data['chat_id']) || !isset($data['content'])) {
            return new JsonResponse(['error' => 'Incomplete data'], 400);
        }

        $chat = $this->subjectChatRepository->find($data['chat_id']);
        if (!$chat) {
            return new JsonResponse(['error' => 'Chat not found'], 404);
        }

        $message = new MessageChat();
        $message->setContent($data['content']);
        $message->setSender($user);
        $message->setChat($chat);
        $message->setIsRead(false);
        $message->setIsFromAI(false);

        $this->entityManager->persist($message);
        $this->entityManager->flush();

        return new JsonResponse(['success' => true]);
    }

    #[Route('/chat/chats', name: 'app_chat_chats', methods: ['GET'])]
    #[IsGranted('ROLE_STUDENT')]
    public function getChats(): JsonResponse
    {
        $user = $this->getUser();
        /** @var Eleve|null $student */
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }

        $chats = $this->subjectChatRepository->findByStudent($student);
        
        return new JsonResponse([
            'chats' => array_map(function($chat) {
                return [
                    'id' => $chat->getId(),
                    'name' => $chat->getName(),
                    'subject' => $chat->getMatiereCycle()->getNom(),
                    'cycle' => $chat->getCycle(),
                    'lastMessage' => $this->getLastMessage($chat),
                    'unreadCount' => $this->getUnreadCount($chat)
                ];
            }, $chats)
        ]);
    }

    #[Route('/chat/messages/{chat}', name: 'app_chat_messages', methods: ['GET'])]
    #[IsGranted('ROLE_STUDENT')]
    public function getMessages($chat): JsonResponse
    {
        $user = $this->getUser();
        /** @var Eleve|null $student */
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }
        
        $messages = $this->messageChatRepository->findByChat($chat);
        
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

    private function getLastMessage($chat): ?array
    {
        $message = $this->messageChatRepository->findLastMessageByChat($chat);
        if (!$message) {
            return null;
        }

        return [
            'content' => $message->getContent(),
            'sender' => $message->getSender()->getUsername(),
            'createdAt' => $message->getCreateAt()->format('c')
        ];
    }

    private function getUnreadCount($chat): int
    {
        return $this->messageChatRepository->countUnreadByChat($chat);
    }
}
