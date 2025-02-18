<?php
namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\MatiereCycle;
use App\Entity\SubjectChat;

class SubjectChatGenerator
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Generate subject chats for each subject
     */
    public function generateSubjectChats(): void
    {
        $matiereCycles = $this->entityManager->getRepository(MatiereCycle::class)->findAll();

        foreach ($matiereCycles as $matiereCycle) {
            $matiere = $matiereCycle->getMatiere();
            $cycle = $matiereCycle->getCycle();

            // Check if chat already exists for this subject
            $existingChat = $this->entityManager->getRepository(SubjectChat::class)
                ->findOneBy(['matiere' => $matiere, 'cycle' => $cycle]);

            if (!$existingChat) {
                $chat = new SubjectChat();
                $chat->setMatiere($matiere);
                $chat->setCycle($cycle);
                $chat->setName($this->getTeacherPersonaName($matiere->getName()));
                $chat->setType('teacher');

                $this->entityManager->persist($chat);
            }
        }

        $this->entityManager->flush();
    }

    /**
     * Get teacher persona name based on subject
     */
    private function getTeacherPersonaName(string $subject): string
    {
        $personas = [
            'Mathematics' => 'Prof. Sophie Laurent',
            'Physics' => 'Dr. Pierre Dubois',
            'Chemistry' => 'Dr. Marie Curie',
            'Biology' => 'Prof. Louis Pasteur',
            'French' => 'Prof. Victor Hugo',
            'English' => 'Prof. William Shakespeare',
            'History' => 'Prof. Jules Michelet',
            'Geography' => 'Prof. Paul Vidal',
            'Philosophy' => 'Prof. Jean-Paul Sartre',
            'Economics' => 'Prof. Thomas Piketty',
        ];

        return $personas[$subject] ?? "Prof. " . ucfirst($subject);
    }
}
