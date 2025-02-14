<?php

namespace App\Controller\Student;

use App\Entity\Categorie;
use App\Entity\GroupChat;
use App\Entity\MessageChat;
use App\Entity\User;
use App\Entity\Eleve;
use App\Repository\GroupChatRepository;
use App\Repository\MessageChatRepository;
use App\Repository\EleveRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/student/chat')]
#[IsGranted('ROLE_STUDENT')]
class ChatController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private MessageChatRepository $messageChatRepository,
        private GroupChatRepository $groupChatRepository,
        private EleveRepository $eleveRepository
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
                    'subject' => $group->getMatiere()->getNom(),
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
