<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Security;

class ChatController extends AbstractController
{

    private string $jwtSecret;
    private JWTTokenManagerInterface $jwtManager;



    public function __construct(string $jwtSecret)
    {
        
        $this->jwtSecret = $jwtSecret;
    }  


    
    #[Route('/chat', name: 'app_chat')]
    #[IsGranted('ROLE_USER')]
    public function index(): Response
    {
        $user = $this->getUser();

        if (!$user) {
            return new JsonResponse(['error' => 'Utilisateur non connecté'], 401);
        }
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

        // Get available subjects
        $availableSubjects = $this->matiereCycleRepository->findAvailableSubjects(
            $student->getClasse(),
            $student->getSpecialite()
        );

        // If no subjects available, show appropriate message
        if (empty($availableSubjects)) {
            $this->addFlash('warning', 'No subjects are currently available for your class level.');
            return $this->redirectToRoute('app_dashboard');
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
            $student->getSpecialite()
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
