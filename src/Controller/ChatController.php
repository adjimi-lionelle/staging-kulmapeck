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
use App\Repository\PaymentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Firebase\JWT\JWT;
use Psr\Log\LoggerInterface;

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
        private PersonneRepository $personneRepository,
        private PaymentRepository $paymentRepository
    ) {
        $this->jwtSecret = $jwtSecretKey;
    }

    #[Route('/chat', name: 'app_chat')]
    #[IsGranted('ROLE_USER')]
    public function index(LoggerInterface $logger): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $logger->info('User accessing chat', [
            'user_id' => $user->getId(),
            'username' => $user->getUsername()
        ]);

        // Get student
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }

        // Generate WebSocket token
        $token = $this->generateToken($student);
        
        // Get WebSocket URL from environment
        $websocketHost = $_ENV['WEBSOCKET_HOST'] ?? $_SERVER['HTTP_HOST'];
        $websocketPort = $_ENV['WEBSOCKET_PORT'] ?? '9000';
        $websocketUrl = "ws://{$websocketHost}:{$websocketPort}";

        $logger->info('WebSocket configuration', [
            'host' => $websocketHost,
            'port' => $websocketPort,
            'url' => $websocketUrl
        ]);

        // Get subjects for the user
        $subjects = $this->subjectChatRepository->findByStudent($student);
        $logger->info('Retrieved subjects for user', [
            'count' => count($subjects),
            'subjects' => array_map(fn($s) => $s->getId(), $subjects)
        ]);

        // Format subjects for frontend
        $formattedSubjects = array_map(function($subject) {
            return [
                'id' => $subject->getId(),
                'name' => $subject->getMatiere()->getName(),
                'icon' => $subject->getMatiere()->getIcon(),
                'matiere' => [
                    'name' => $subject->getMatiere()->getName(),
                    'icon' => $subject->getMatiere()->getIcon()
                ],
                'teacherName' => $subject->getTeacher() ? $subject->getTeacher()->getFullName() : null
            ];
        }, $subjects);

        // Get recent messages
        $messages = [];  // You can implement this based on your needs

        return $this->render('student/chat/index.html.twig', [
            'websocket_url' => $websocketUrl,
            'token' => $token,
            'subjects' => $formattedSubjects,
            'messages' => $messages
        ]);
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
        $token = $this->generateToken($student);

        return $this->render('student/chat/subject_chat.html.twig', [
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
        $token = $this->generateToken($student);

        // Get teacher persona for this subject
        $teacherPersona = [
            'name' => $this->getTeacherName($subject->getMatiere()),
            'avatar' => $this->getTeacherAvatar($subject->getMatiere())
        ];

        return $this->render('student/chat/subject_chat.html.twig', [
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
            'messages' => array_map(function($m) {
                return [
                    'content' => $m->getContent(),
                    'fromStudent' => $m->isFromStudent(),
                    'createdAt' => $m->getCreatedAt()
                ];
            }, $messages),
            'websocket_url' => $this->getParameter('websocket_url'),
            'student_token' => $token
        ]);
    }

    #[Route('/chat/setup', name: 'app_chat_setup', methods: ['POST'])]
    public function setup(Request $request): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        if (!$student) {
            throw $this->createNotFoundException('Student not found');
        }

        $classe = $this->classeRepository->find($request->request->get('classe'));
        if (!$classe) {
            throw $this->createNotFoundException('Class not found');
        }

        $student->setClasse($classe);

        // Only set specialization for second cycle students (2nde to Terminal)
        $secondCycleSkillLevels = [5, 6, 7]; // Adjust these IDs based on your database
        $specializationId = $request->request->get('specialization');
        
        if (in_array($classe->getSkillLevel()->getId(), $secondCycleSkillLevels) && $specializationId) {
            $specialization = $this->specialiteRepository->find($specializationId);
            if ($specialization) {
                $student->setSpecialite($specialization);
            }
        } else {
            $student->setSpecialite(null);
        }

        $this->entityManager->flush();

        return $this->redirectToRoute('app_chat');
    }

    private function getTeacherName(Categorie $subject): string
    {
        // Try to get the assigned teacher for this subject
        $assignedTeachers = $subject->getEnseignants();
        
        if (!$assignedTeachers->isEmpty()) {
            // Get the first assigned teacher
            $teacher = $assignedTeachers->first();
            return $teacher->getUtilisateur()->getPersonne()->getNomComplet();
        }

        // If no real teacher is assigned, use AI teacher persona
        $teacherPersonas = [
            'MATHEMATIQUES' => 'Prof. Sophie Laurent',
            'SCIENCE DE LA VIE ET DE LA TERRE (SVT)' => 'Prof. Marc Dubois',
            'PHYSIQUES' => 'Prof. Claire Martin',
            'FRANCAIS' => 'Prof. Pierre Dupont',
            'ANGLAIS' => 'Prof. John Smith'
        ];

        return $teacherPersonas[$subject->getName()] ?? 'Prof. ' . $subject->getName();
    }

    private function getTeacherAvatar(Categorie $subject): string
    {
        // Try to get the assigned teacher's avatar
        $assignedTeachers = $subject->getEnseignants();
        
        if (!$assignedTeachers->isEmpty()) {
            // Get the first assigned teacher's avatar
            $teacher = $assignedTeachers->first();
            $avatar = $teacher->getUtilisateur()->getPersonne()->getAvatarPath();
            if ($avatar) {
                return $avatar;
            }
        }

        // If no real teacher or no avatar, use default subject-based avatar
        $defaultAvatars = [
            'MATHEMATIQUES' => 'math-teacher.png',
            'SCIENCE DE LA VIE ET DE LA TERRE (SVT)' => 'biology-teacher.png',
            'PHYSIQUES' => 'physics-teacher.png',
            'FRANCAIS' => 'french-teacher.png',
            'ANGLAIS' => 'english-teacher.png'
        ];

        return $defaultAvatars[$subject->getName()] ?? 'default-teacher.png';
    }

    private function getSubjectIcon(Categorie $subject): string
    {
        // Try to get icon from the subject's metadata first
        $icon = $subject->getImageFile();
        if ($icon) {
            return $icon;
        }

        // If no icon in database, use default mapping
        $defaultIcons = [
            'MATHEMATIQUES' => 'calculator',
            'SCIENCE DE LA VIE ET DE LA TERRE (SVT)' => 'leaf',
            'PHYSIQUES' => 'atom',
            'FRANCAIS' => 'book',
            'ANGLAIS' => 'globe'
        ];

        return $defaultIcons[$subject->getName()] ?? 'book';
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

    private function generateToken(User $user): string
    {
        $payload = [
            'sub' => $user->getId(),
            'iat' => time(),
            'exp' => time() + 3600, // Token expires in 1 hour
            'role' => 'student'
        ];

        return JWT::encode($payload, $this->jwtSecret, 'HS256');
    }

    private function generateWebSocketToken(User $user): string
    {
        $jwtSecret = $_ENV['JWT_SECRET'] ?? throw new \RuntimeException('JWT_SECRET not configured');
        $payload = [
            'sub' => $user->getId(),
            'iat' => time(),
            'exp' => time() + 3600, // Token expires in 1 hour
            'role' => $user->getRoles()[0] ?? 'ROLE_USER'
        ];

        return JWT::encode($payload, $jwtSecret, 'HS256');
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
