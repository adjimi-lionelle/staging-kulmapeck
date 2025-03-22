<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;

class DeepSeekAIService
{
    private $httpClient;
    private $logger;
    private $apiKey;
    private $apiEndpoint = 'https://api.deepseek.com/v1/chat/completions';
    
    public function __construct(
        HttpClientInterface $httpClient, 
        LoggerInterface $logger,
        string $deepseekApiKey
    ) {
        $this->httpClient = $httpClient;
        $this->logger = $logger;
        $this->apiKey = $deepseekApiKey;
    }
    
    public function generateResponse(string $prompt, string $subject, array $messageHistory = []): string
    {
        // Format conversation history for the AI
        $messages = $this->formatConversationHistory($messageHistory, $subject);
        
        // Add the current prompt
        $messages[] = [
            'role' => 'user',
            'content' => $prompt
        ];
        
        try {
            $response = $this->httpClient->request('POST', $this->apiEndpoint, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'deepseek-chat',
                    'messages' => $messages,
                    'temperature' => 0.7,
                    'max_tokens' => 250,
                ],
            ]);
            
            $data = $response->toArray();
            return $data['choices'][0]['message']['content'];
        } catch (\Exception $e) {
            $this->logger->error('DeepSeek API error: ' . $e->getMessage());
            return 'Sorry, I am having trouble connecting to my knowledge base. Please try again later.';
        }
    }
    
    private function formatConversationHistory(array $messageHistory, string $subject): array
    {
        $messages = [
            [
                'role' => 'system',
                'content' => "You are an AI teacher specialized in $subject. Provide accurate, helpful, and educational responses to student questions. Keep explanations clear and appropriate for students. If you don't know something, admit it rather than providing incorrect information."
            ]
        ];
        
        // Add conversation history (limited to last 10 messages)
        $recentMessages = array_slice($messageHistory, -10);
        foreach ($recentMessages as $msg) {
            $role = $msg['isFromAI'] ? 'assistant' : 'user';
            $messages[] = [
                'role' => $role,
                'content' => $msg['content']
            ];
        }
        
        return $messages;
    }
}
