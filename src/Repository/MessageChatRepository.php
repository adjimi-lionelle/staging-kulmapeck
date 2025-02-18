<?php

namespace App\Repository;

use App\Entity\MessageChat;
use App\Entity\GroupChat;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MessageChat>
 *
 * @method MessageChat|null find($id, $lockMode = null, $lockVersion = null)
 * @method MessageChat|null findOneBy(array $criteria, array $orderBy = null)
 * @method MessageChat[]    findAll()
 * @method MessageChat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MessageChatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MessageChat::class);
    }

    /**
     * Find messages for a specific group
     */
    public function findByGroup(GroupChat $group, int $limit = 50): array
    {
        return $this->createQueryBuilder('m')
            ->where('m.groupChat = :group')
            ->setParameter('group', $group)
            ->orderBy('m.createAt', 'ASC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Find the last message in a group
     */
    public function findLastMessageByGroup(GroupChat $group): ?MessageChat
    {
        return $this->createQueryBuilder('m')
            ->where('m.groupChat = :group')
            ->setParameter('group', $group)
            ->orderBy('m.createAt', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Count unread messages in a group
     */
    public function countUnreadByGroup(GroupChat $group): int
    {
        return $this->createQueryBuilder('m')
            ->select('COUNT(m.id)')
            ->where('m.groupChat = :group')
            ->andWhere('m.isRead = :isRead')
            ->setParameter('group', $group)
            ->setParameter('isRead', false)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Find messages after a specific message ID
     */
    public function findMessagesAfter(GroupChat $group, int $lastMessageId): array
    {
        return $this->createQueryBuilder('m')
            ->where('m.groupChat = :group')
            ->andWhere('m.id > :lastMessageId')
            ->setParameter('group', $group)
            ->setParameter('lastMessageId', $lastMessageId)
            ->orderBy('m.createAt', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Mark all messages as read for a user in a group
     */
    public function markAllAsRead(GroupChat $group, User $user): void
    {
        $this->createQueryBuilder('m')
            ->update()
            ->set('m.isRead', ':isRead')
            ->where('m.groupChat = :group')
            ->andWhere('m.sender != :user')
            ->setParameter('isRead', true)
            ->setParameter('group', $group)
            ->setParameter('user', $user)
            ->getQuery()
            ->execute();
    }

    /**
     * Find messages for a specific subject chat
     */
    public function findSubjectChatMessages(GroupChat $subject, int $limit = 50): array
    {
        return $this->createQueryBuilder('m')
            ->where('m.groupChat = :subject')
            ->setParameter('subject', $subject)
            ->orderBy('m.createAt', 'DESC')  // Most recent messages first
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
