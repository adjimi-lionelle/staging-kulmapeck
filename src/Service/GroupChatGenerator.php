<?php
namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\MatiereCycle;
use App\Entity\GroupChat;

class GroupChatGenerator
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Crée dynamiquement les groupes de chat en fonction des matières et des cycles
     */
    public function generateGroupChats(): void
    {
        $matiereCycles = $this->entityManager->getRepository(MatiereCycle::class)->findAll();

        foreach ($matiereCycles as $matiereCycle) {
            $matiere = $matiereCycle->getMatiere();
            $cycle = $matiereCycle->getCycle();

            // Vérifier si le groupe existe déjà
            $existingGroup = $this->entityManager->getRepository(GroupChat::class)
                ->findOneBy(['matiere' => $matiere, 'cycle' => $cycle]);

            if (!$existingGroup) {
                $groupChat = new GroupChat();
                $groupChat->setMatiere($matiere);
                $groupChat->setCycle($cycle);
                $groupChat->setName($matiere->getName() . " Cycle " . $cycle);

                $this->entityManager->persist($groupChat);
                echo " Création du groupe : " . $groupChat->getName() . "\n";
            }
        }

        $this->entityManager->flush();
        echo " Tous les groupes de discussion ont été créés avec succès !\n";
    }
}
