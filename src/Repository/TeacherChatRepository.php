<?php

namespace App\Repository;

use App\Entity\GroupChat;
use App\Entity\Eleve;
use App\Entity\MatiereCycle;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GroupChat>
 *
 * @method GroupChat|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroupChat|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroupChat[]    findAll()
 * @method GroupChat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TeacherChatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroupChat::class);
    }

    /**
     * Find student's chat with AI teacher for a specific subject
     */
    public function findStudentTeacherChat(Eleve $student, MatiereCycle $subject): ?GroupChat
    {
        return $this->createQueryBuilder('c')
            ->where('c.matiere = :subject')
            ->andWhere('c.cycle = :cycle')
            ->andWhere('c.type = :type')
            ->setParameter('subject', $subject->getMatiere())
            ->setParameter('cycle', $subject->getCycle())
            ->setParameter('type', 'teacher')
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Create a new chat between student and AI teacher
     */
    public function createTeacherChat(Eleve $student, MatiereCycle $subject): GroupChat
    {
        $chat = new GroupChat();
        $chat->setMatiere($subject->getMatiere());
        $chat->setCycle($subject->getCycle());
        $chat->setName($this->getTeacherPersonaName($subject->getMatiere()->getName()));
        $chat->setType('teacher');
        
        $this->getEntityManager()->persist($chat);
        $this->getEntityManager()->flush();
        
        return $chat;
    }

    /**
     * Find or create a chat between student and AI teacher for a subject
     */
    public function findOrCreateTeacherChat(Eleve $student, MatiereCycle $subject): GroupChat
    {
        $chat = $this->findStudentTeacherChat($student, $subject);
        
        if (!$chat) {
            $chat = $this->createTeacherChat($student, $subject);
        }
        
        return $chat;
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
            // Add more subjects and personas as needed
        ];

        return $personas[$subject] ?? "Prof. " . ucfirst($subject);
    }

    /**
     * Get all active teacher chats for a student
     */
    public function findStudentActiveChats(Eleve $student): array
    {
        $classe = $student->getClasse();
        if (!$classe || !$classe->getSkillLevel()) {
            return [];
        }

        $cycle = (int) filter_var($classe->getSkillLevel()->getName(), FILTER_SANITIZE_NUMBER_INT);

        return $this->createQueryBuilder('c')
            ->where('c.cycle = :cycle')
            ->andWhere('c.type = :type')
            ->setParameter('cycle', $cycle)
            ->setParameter('type', 'teacher')
            ->orderBy('c.createAt', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
