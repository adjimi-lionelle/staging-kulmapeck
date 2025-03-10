<?php

namespace App\WebSocket;

use App\Entity\SubjectChat;
use App\Entity\MessageChat;
use App\Entity\User;
use App\Repository\SubjectChatRepository;
use App\Repository\MessageChatRepository;
use App\Service\DeepSeekAIService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;

class AIMessageHandler
{
    private $entityManager;
    private $subjectChatRepository;
    private $messageChatRepository;
    private $aiService;
    private $logger;
    
    public function __construct(
        EntityManagerInterface $entityManager,
        SubjectChatRepository $subjectChatRepository,
        MessageChatRepository $messageChatRepository,
        DeepSeekAIService $aiService,
        LoggerInterface $logger
    ) {
        $this->entityManager = $entityManager;
        $this->subjectChatRepository = $subjectChatRepository;
        $this->messageChatRepository = $messageChatRepository;
        $this->aiService = $aiService;
        $this->logger = $logger;
    }
    
    public function handleMessage(array $data, User $user): ?array
    {
        if (!isset($data['group_id']) || !isset($data['message'])) {
            return null;
        }
        
        $subjectChat = $this->subjectChatRepository->find($data['group_id']);
        if (!$subjectChat) {
            return null;
        }
        
        // Check if this is an AI-enabled chat
        // We'll use a simple check for now - in the future, you might want to add a field to the SubjectChat entity
        if (!$this->isAIEnabledChat($subjectChat)) {
            return null;
        }
        
        // Get recent messages for context
        $recentMessages = $this->messageChatRepository->findBy(
            ['subjectChat' => $subjectChat],
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
        $subjectName = $subjectChat->getMatiere()->getName();
        
        try {
            // Generate AI response
            $aiResponse = $this->aiService->generateResponse(
                $data['message'],
                $subjectName,
                $messageHistory
            );
            
            // Create and save AI message
            $message = new MessageChat();
            $message->setContent($aiResponse);
            $message->setSender($user); // Use the same user but mark as AI
            $message->setSubjectChat($subjectChat);
            $message->setIsRead(false);
            $message->setIsFromAI(true);
            $message->setCreateAt(new \DateTimeImmutable());
            
            $this->entityManager->persist($message);
            $this->entityManager->flush();
            
            return [
                'message' => $aiResponse,
                'author' => 'AI Teacher',
                'isFromAI' => true,
                'timestamp' => $message->getCreateAt()->format('c')
            ];
        } catch (\Exception $e) {
            $this->logger->error('Error generating AI response: ' . $e->getMessage());
            return null;
        }
    }
    
    /**
     * Determine if a subject chat should have AI responses
     * This is a placeholder implementation - you might want to add a field to the SubjectChat entity
     */
    private function isAIEnabledChat(SubjectChat $chat): bool
    {
        // For now, we'll enable AI for all chats
        return true;
    }
}
