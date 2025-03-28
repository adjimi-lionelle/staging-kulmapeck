<?php

namespace App\Command;

use App\Entity\Eleve; // Assurez-vous d'importer l'entité Eleve
use App\Repository\EleveRepository; // Si tu as un repository pour Eleve
use App\Repository\MatiereCycleRepository;
use App\Repository\ClasseRepository;
use App\Entity\SubjectChat;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateSubjectChatsForPremiumStudentsCommand extends Command
{
    private $entityManager;
    private $eleveRepository;
    private $matiereCycleRepository;
    private $classeRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        EleveRepository $eleveRepository,
        MatiereCycleRepository $matiereCycleRepository,
        ClasseRepository $classeRepository
    ) {
        parent::__construct();

        $this->entityManager = $entityManager;
        $this->eleveRepository = $eleveRepository;
        $this->matiereCycleRepository = $matiereCycleRepository;
        $this->classeRepository = $classeRepository;
    }

    protected static $defaultName = 'app:create-subject-chats-for-premium-students';

    protected function configure(): void
    {
        $this->setDescription('Récupère les élèves premium et crée leurs SubjectChats.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // Récupérer tous les élèves premium
        $elevesPremium = $this->eleveRepository->findBy(['premium' => true]); // Assure-toi que le champ premium existe dans ton entité Eleve
        
        if (empty($elevesPremium)) {
            $output->writeln('Aucun élève premium trouvé.');
            return Command::SUCCESS;
        }

        $output->writeln(count($elevesPremium) . ' élèves premium trouvés. Début du traitement.');

        // Appel de la fonction pour chaque élève premium
        foreach ($elevesPremium as $eleve) {
            $output->writeln('Traitement de l\'élève ' . $eleve->getId());
            $this->manageSubjectChats($eleve, $this->entityManager, $this->matiereCycleRepository, $this->classeRepository);
            $output->writeln('SubjectChats pour l\'élève ' . $eleve->getId() . ' mis à jour.');
        }

        $output->writeln('Traitement terminé.');
        return Command::SUCCESS;
    }

    private function manageSubjectChats($eleve, $entityManager, $MatiereCycleRepository, $classeRepository): void
    {
        // Récupérer la classe et le cycle de l'élève
        $classe = $eleve->getClasse();
        if (!$classe || !$classe->getSkillLevel()) {
            echo " Classe ou niveau de compétence non défini. Arrêt du traitement.<br>";
            return;
        }

        $matieres = []; 
        $classesA4ESP = array_map(fn($c) => $c['name'], $classeRepository->findAllA4ESP());
        $classesA4ALL = array_map(fn($c) => $c['name'], $classeRepository->findAllA4ALL());

        if ($classe->getSpecialite()) {
            $specialite = $classe->getSpecialite()->getId();
            
            if ($specialite == 1 || $specialite == 2) {
                $matieres = array_merge($matieres, $MatiereCycleRepository->createQueryBuilder('sc')
                    ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                    ->setParameter('cycle1', 2)
                    ->setParameter('cycle2', 21)
                    ->getQuery()
                    ->getResult());
            } elseif ($specialite == 4 && in_array($classe->getName(), $classesA4ESP)) {
                $matieres = array_merge($matieres, $MatiereCycleRepository->createQueryBuilder('sc')
                    ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                    ->setParameter('cycle1', 2)
                    ->setParameter('cycle2', 22)
                    ->getQuery()
                    ->getResult());
            } elseif ($specialite == 4 && in_array($classe->getName(), $classesA4ALL)) {
                $matieres = array_merge($matieres, $MatiereCycleRepository->createQueryBuilder('sc')
                    ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                    ->setParameter('cycle1', 2)
                    ->setParameter('cycle2', 23)
                    ->getQuery()
                    ->getResult());
            }
        }

        $skill_level = $classe->getSkillLevel()->getId();

        if ($skill_level == 1 || $skill_level == 2) {
            $matieres = array_merge($matieres, $MatiereCycleRepository->findBy(['cycle' => 1]));
        } elseif ($skill_level == 3 || $skill_level == 4) {
            if (in_array($classe->getName(), $classesA4ALL)) {
                $matieres = array_merge($matieres, $MatiereCycleRepository->createQueryBuilder('sc')
                    ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                    ->setParameter('cycle1', 1)
                    ->setParameter('cycle2', 11)
                    ->getQuery()
                    ->getResult());
            } elseif (in_array($classe->getName(), $classesA4ESP)) {
                $matieres = array_merge($matieres, $MatiereCycleRepository->createQueryBuilder('sc')
                    ->where('sc.cycle = :cycle1 OR sc.cycle = :cycle2')
                    ->setParameter('cycle1', 1)
                    ->setParameter('cycle2', 12)
                    ->getQuery()
                    ->getResult());
            } elseif ($classe->getName() == "Troisième Chinois- 3ème Chinois") {
                $matieres = array_merge($matieres, $MatiereCycleRepository->createQueryBuilder('sc')
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

            $existingSubjectChat = $entityManager->getRepository(SubjectChat::class)
                ->findOneBy(['eleve' => $eleve, 'matiere' => $matiere->getMatiere()]);

            if ($existingSubjectChat) {
                $existingSubjectChat->setCreatedAt(new \DateTimeImmutable());
                $entityManager->persist($existingSubjectChat);
            } else {
                $subjectChat = new SubjectChat();
                $subjectChat->setEleve($eleve);
                $subjectChat->setMatiere($matiere->getMatiere());
                $subjectChat->setCycle($matiere->getCycle());
                $subjectChat->setName($matiere->getMatiere()->getName());
                $subjectChat->setCreatedAt(new \DateTimeImmutable());

                $entityManager->persist($subjectChat);
            }
        }

        $entityManager->flush();
    }
}
