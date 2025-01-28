<?php

namespace App\Repository;

use App\Entity\ChatMessage;
use App\Entity\Eleve;
use App\Entity\Matiere;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ChatMessage>
 *
 * @method ChatMessage|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChatMessage|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChatMessage[]    findAll()
 * @method ChatMessage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChatMessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChatMessage::class);
    }

    /**
     * Get student's chat messages for a specific subject
     */
    public function findStudentMessages(Eleve $student, Matiere $subject): array
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.student = :student')
            ->andWhere('m.subject = :subject')
            ->setParameter('student', $student)
            ->setParameter('subject', $subject)
            ->orderBy('m.createdAt', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Get daily message count for a student
     */
    public function getDailyMessageCount(Eleve $student): int
    {
        $today = new \DateTime('today');
        $tomorrow = new \DateTime('tomorrow');

        return $this->createQueryBuilder('m')
            ->select('COUNT(m.id)')
            ->andWhere('m.student = :student')
            ->andWhere('m.createdAt >= :today')
            ->andWhere('m.createdAt < :tomorrow')
            ->andWhere('m.isFromAI = :isFromAI')
            ->setParameter('student', $student)
            ->setParameter('today', $today)
            ->setParameter('tomorrow', $tomorrow)
            ->setParameter('isFromAI', false)
            ->getQuery()
            ->getSingleScalarResult();
    }
}
