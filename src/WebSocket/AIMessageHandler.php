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
    
    public function handleMessage(array $data, User $user, string $class): ?array
    {
        if (!isset($data['subject_id']) || !isset($data['message'])) {
            return null;
        }
        
        $subjectChat = $this->subjectChatRepository->find($data['subject_id']);
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
        $subjectName = $subjectChat->getName();
        $username = $user->getUsername();
        
        try {
            // Generate AI response
            $aiResponse = $this->aiService->generateResponse(
                $data['message'],
                $subjectName,
                $messageHistory,
                $class,
                $username
            );
            $content = $this->cleanAIMessage($aiResponse);
           // echo "IA RESPONSE : " . $aiResponse . "\n";
            // Create and save AI message
            $message = new MessageChat();
            $message->setContent($content);
            $message->setSender($user); // Use the same user but mark as AI
            $message->setSubjectChat($subjectChat);
            $message->setIsRead(false);
            $message->setIsFromAI(true);
            $message->setCreateAt(new \DateTimeImmutable());
            $message->setExpiresAt((new \DateTimeImmutable())->modify('+30 days'));
            
            $this->entityManager->persist($message);
            $this->entityManager->flush();
            
            return [
                'message' => $content,
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

    private function cleanAIMessage(string $text): string
    {
        // Supprime les emojis
        $text = preg_replace('/[\x{1F600}-\x{1F64F}]/u', '', $text);
        $text = preg_replace('/[\x{1F300}-\x{1F5FF}]/u', '', $text);
        $text = preg_replace('/[\x{1F680}-\x{1F6FF}]/u', '', $text);
        $text = preg_replace('/[\x{2600}-\x{26FF}]/u', '', $text);
        $text = preg_replace('/[\x{2700}-\x{27BF}]/u', '', $text);
    
        // Supprime les astérisques
        $text = str_replace('*', '', $text);
    
        // Ajoute un retour à la ligne avant les formes d’énumération (avec gestion des espaces)
        $text = preg_replace('/\s*-\s+/', "\n- ", $text);        // Tiret court
        $text = preg_replace('/\s*–\s+/', "\n– ", $text);        // Tiret long
        $text = preg_replace('/\s*(\d+\))/', "\n$1", $text);     // Numérotation style 1)
        $text = preg_replace('/\s*(\d+\.)/', "\n$1", $text);     // Numérotation style 1.
    
        // Rendre les sauts de ligne visibles dans du HTML
        $text = nl2br(trim($text));
    
        return $text;
    }
}
