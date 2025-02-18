<?php

namespace App\Controller\Student;

use App\Entity\Categorie;
use App\Entity\GroupChat;
use App\Entity\MessageChat;
use App\Entity\User;
use App\Entity\Eleve;
use App\Entity\MatiereCycle;
use App\Repository\GroupChatRepository;
use App\Repository\MessageChatRepository;
use App\Repository\EleveRepository;
use App\Repository\MatiereCycleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Firebase\JWT\JWT;

#[Route('/student/chat')]
#[IsGranted('ROLE_STUDENT')]
class ChatController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private MessageChatRepository $messageChatRepository,
        private GroupChatRepository $groupChatRepository,
        private EleveRepository $eleveRepository,
        private MatiereCycleRepository $matiereCycleRepository
    ) {}

    #[Route('', name: 'app_student_chat')]
    public function index(): Response
    {
        // Redirect to the new chat interface
        return $this->redirectToRoute('app_chat');
    }

    #[Route('/groups', name: 'app_student_chat_groups', methods: ['GET'])]
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

    #[Route('/messages/{group}', name: 'app_student_chat_messages', methods: ['GET'])]
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

    #[Route('/subject/{id}', name: 'app_student_subject_chat')]
    public function subjectChat(MatiereCycle $subject): Response
    {
        $user = $this->getUser();
        /** @var Eleve|null $student */
        $student = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        
        if (!$student) {
            throw $this->createAccessDeniedException('Student account not found.');
        }

        // Get all subjects available to the student based on their class and specialization
        $availableSubjects = $this->matiereCycleRepository->findAvailableSubjects(
            $student->getClasse(),
            $student->getSpecialisation()
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
        
        $token = JWT::encode($payload, $this->getParameter('jwt_secret'), 'HS256');

        return $this->render('front/chat/subject_chat.html.twig', [
            'current_subject' => $subject,
            'available_subjects' => $availableSubjects,
            'messages' => $messages,
            'student_token' => $token,
            'websocket_url' => $this->getParameter('websocket_url')
        ]);
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
