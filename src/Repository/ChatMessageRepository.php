<?php

namespace App\Repository;

use App\Entity\Categorie;
use App\Entity\ChatMessage;
use App\Entity\Eleve;
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
    public function findStudentMessages(Eleve $student, Categorie $subject): array
    {
        return $this->createQueryBuilder('m')
            ->where('m.student = :student')
            ->andWhere('m.subject = :subject')
            ->setParameter('student', $student)
            ->setParameter('subject', $subject)
            ->orderBy('m.createdAt', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Get student's daily message count
     */
    public function getDailyMessageCount(Eleve $student): int
    {
        $today = new \DateTime('today');
        $tomorrow = new \DateTime('tomorrow');

        return $this->createQueryBuilder('m')
            ->select('COUNT(m.id)')
            ->where('m.student = :student')
            ->andWhere('m.isFromAI = false')
            ->andWhere('m.createdAt >= :today')
            ->andWhere('m.createdAt < :tomorrow')
            ->setParameter('student', $student)
            ->setParameter('today', $today)
            ->setParameter('tomorrow', $tomorrow)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Get student's unread message count for a specific subject
     */
    public function getUnreadCount(Eleve $student, Categorie $subject): int
    {
        return $this->createQueryBuilder('m')
            ->select('COUNT(m.id)')
            ->where('m.student = :student')
            ->andWhere('m.subject = :subject')
            ->andWhere('m.isRead = false')
            ->setParameter('student', $student)
            ->setParameter('subject', $subject)
            ->getQuery()
            ->getSingleScalarResult();
    }
}
