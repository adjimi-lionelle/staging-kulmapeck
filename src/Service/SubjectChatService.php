<?php

namespace App\Service;

use App\Entity\Eleve;
use App\Entity\SubjectChat;
use App\Repository\MatiereCycleRepository;
use App\Repository\ClasseRepository;
use Doctrine\ORM\EntityManagerInterface;

class SubjectChatService
{
    private $entityManager;
    private $matiereCycleRepository;
    private $classeRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        MatiereCycleRepository $matiereCycleRepository,
        ClasseRepository $classeRepository
    ) {
        $this->entityManager = $entityManager;
        $this->matiereCycleRepository = $matiereCycleRepository;
        $this->classeRepository = $classeRepository;
    }

    public function manageSubjectChats(Eleve $eleve): void
    {
        // Récupérer la classe et le cycle de l'élève
        $classe = $eleve->getClasse();
        if (!$classe || !$classe->getSkillLevel()) {
            echo " Classe ou niveau de compétence non défini. Arrêt du traitement.<br>";
            return;
        }

        $matieres = [];
        $classesA4ESP = array_map(fn($c) => $c['name'], $this->classeRepository->findAllA4ESP());
        $classesA4ALL = array_map(fn($c) => $c['name'], $this->classeRepository->findAllA4ALL());
        $classesChinois = array_map(fn($c) => $c['name'], $this->classeRepository->findAllChinois());

        // Logique pour ajouter des matières selon la spécialité
        if ($classe->getSpecialite()) {
            $specialite = $classe->getSpecialite()->getId();

            if ($specialite == 1 || $specialite == 2) {
                $matieres = array_merge($matieres, $this->matiereCycleRepository->createQueryBuilder('sc')
                    ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                    ->setParameter('cycle1', 2)
                    ->setParameter('cycle2', 21)
                    ->getQuery()
                    ->getResult());
            } elseif ($specialite == 4 && in_array($classe->getName(), $classesA4ESP)) {
                $matieres = array_merge($matieres, $this->matiereCycleRepository->createQueryBuilder('sc')
                    ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                    ->setParameter('cycle1', 2)
                    ->setParameter('cycle2', 22)
                    ->getQuery()
                    ->getResult());
            } elseif ($specialite == 4 && in_array($classe->getName(), $classesA4ALL)) {
                $matieres = array_merge($matieres, $this->matiereCycleRepository->createQueryBuilder('sc')
                    ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                    ->setParameter('cycle1', 2)
                    ->setParameter('cycle2', 23)
                    ->getQuery()
                    ->getResult());
            } elseif ($specialite == 4 && in_array($classe->getName(), $classesChinois)) {
                $matieres = array_merge($matieres, $this->matiereCycleRepository->createQueryBuilder('sc')
                    ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                    ->setParameter('cycle1', 2)
                    ->setParameter('cycle2', 25)
                    ->getQuery()
                    ->getResult());
            }
        }

        $skill_level = $classe->getSkillLevel()->getId();

        // Logique pour ajouter des matières selon le niveau de compétence
        if ($skill_level == 1 || $skill_level == 2) {
            $matieres = array_merge($matieres, $this->matiereCycleRepository->findBy(['cycle' => 1]));
        } elseif ($skill_level == 3 || $skill_level == 4) {
            if (in_array($classe->getName(), $classesA4ALL)) {
                $matieres = array_merge($matieres, $this->matiereCycleRepository->createQueryBuilder('sc')
                    ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                    ->setParameter('cycle1', 1)
                    ->setParameter('cycle2', 11)
                    ->getQuery()
                    ->getResult());
            } elseif (in_array($classe->getName(), $classesA4ESP)) {
                $matieres = array_merge($matieres, $this->matiereCycleRepository->createQueryBuilder('sc')
                    ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                    ->setParameter('cycle1', 1)
                    ->setParameter('cycle2', 12)
                    ->getQuery()
                    ->getResult());
            } elseif ($classe->getName() == "Troisième Chinois- 3ème Chinois") {
                $matieres = array_merge($matieres, $this->matiereCycleRepository->createQueryBuilder('sc')
                    ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                    ->setParameter('cycle1', 1)
                    ->setParameter('cycle2', 14)
                    ->getQuery()
                    ->getResult());
            }
        }

        if (empty($matieres)) {
            echo " Aucune matière trouvée pour cet élève.<br>";
            return;
        }

        foreach ($matieres as $matiere) {
            if (!$matiere->getMatiere()) {
                echo " Matière non définie pour ID : " . $matiere->getId() . "<br>";
                continue;
            }

            $existingSubjectChat = $this->entityManager->getRepository(SubjectChat::class)
                ->findOneBy(['eleve' => $eleve, 'matiere' => $matiere->getMatiere()]);

            if ($existingSubjectChat) {
                $existingSubjectChat->setCreatedAt(new \DateTimeImmutable());
                $this->entityManager->persist($existingSubjectChat);
            } else {
                $subjectChat = new SubjectChat();
                $subjectChat->setEleve($eleve);
                $subjectChat->setMatiere($matiere->getMatiere());
                $subjectChat->setCycle($matiere->getCycle());
                $subjectChat->setName($matiere->getMatiere()->getName());
                $subjectChat->setCreatedAt(new \DateTimeImmutable());

                $this->entityManager->persist($subjectChat);
            }
        }

        $this->entityManager->flush();
    }
}
