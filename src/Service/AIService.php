<?php

namespace App\Service;

use App\Entity\Categorie;
use App\Entity\Eleve;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class AIService
{
    private string $pythonApiUrl;

    public function __construct(
        private HttpClientInterface $client,
        ParameterBagInterface $params
    ) {
        $this->pythonApiUrl = $params->get('app.python_api_url');
    }

    public function generateResponse(string $message, Categorie $subject, Eleve $student): string
    {
        try {
            $response = $this->client->request('POST', 
                $this->pythonApiUrl . '/chat/' . urlencode($subject->getName()),
                [
                    'json' => [
                        'message' => $message,
                        'student_id' => $student->getId(),
                        'class_name' => $student->getClasse()?->getNom(),
                        'specialization' => $student->getSpecialite()?->getNom()
                    ]
                ]
            );

            $data = $response->toArray();
            if (isset($data['success']) && $data['success']) {
                return $data['response'];
            }

            throw new \RuntimeException('Failed to get AI response: ' . ($data['detail'] ?? 'Unknown error'));
        } catch (\Exception $e) {
            // Log the error
            error_log('AI Service Error: ' . $e->getMessage());
            
            // Return a friendly message
            return "Je suis désolé, je ne peux pas répondre pour le moment. Veuillez réessayer plus tard.";
        }
    }
}
