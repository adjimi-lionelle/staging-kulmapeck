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
    
    public function generateResponse(string $prompt, string $subject, array $messageHistory, $username, $class): string
    {
        // Format conversation history for the AI
        $messages = $this->formatConversationHistory($messageHistory, $subject, $username, $class);
        
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
                    'max_tokens' => 1000,
                ],
            ]);
            
            $data = $response->toArray();
            return $data['choices'][0]['message']['content'];
        } catch (\Exception $e) {
            $this->logger->error('DeepSeek API error: ' . $e->getMessage());
            return 'Oups, je ne peux pas répondre pour le moment. Il semble que votre connexion internet ne soit pas bonne. Veuillez réessayer dans quelques secondes ';
        }
    }
    
    private function formatConversationHistory(array $messageHistory, string $subject, string $username, string $class): array
    {
        $personalizedGreeting = $username ? "Always address the student as $username in your responses. " : "";
        
        $messages = [
            [
                'role' => 'system',
                'content' => "You are an AI teacher specialized in $subject. You are helping a student named $username, who is in class $class. Provide accurate, helpful, and educational responses to the student's questions. Keep explanations clear, concise, and appropriate for this class level. Always give brief, to-the-point answers in 3 sentences or less when possible. Focus only on the most important information. If you don't know something, admit it rather than providing incorrect information."
               // "You are an AI teacher specialized in $subject. Provide accurate, helpful, and educational responses to student questions. Keep explanations clear, concise, and appropriate for students. Always give brief, to-the-point answers in 3 sentences or less when possible. Focus only on the most important information. If you don't know something, admit it rather than providing incorrect information."
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
