<?php

namespace App\Repository;

use App\Entity\MessageChat;
use App\Entity\SubjectChat;
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
     * Find messages for a specific chat
     */
    public function findByChat(SubjectChat $chat, int $limit = 50): array
    {
        return $this->createQueryBuilder('m')
            ->where('m.subjectChat = :chat')
            ->setParameter('chat', $chat)
            ->orderBy('m.createAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Find the last message in a chat
     */
    public function findLastMessageByChat(SubjectChat $chat): ?MessageChat
    {
        return $this->createQueryBuilder('m')
            ->where('m.subjectChat = :chat')
            ->setParameter('chat', $chat)
            ->orderBy('m.createAt', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Count unread messages in a chat
     */
    public function countUnreadByChat(SubjectChat $chat): int
    {
        return (int) $this->createQueryBuilder('m')
            ->select('COUNT(m.id)')
            ->where('m.subjectChat = :chat')
            ->andWhere('m.isRead = :isRead')
            ->setParameter('chat', $chat)
            ->setParameter('isRead', false)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Find messages after a specific message ID
     */
    public function findMessagesAfter(SubjectChat $chat, int $lastMessageId): array
    {
        return $this->createQueryBuilder('m')
            ->where('m.subjectChat = :chat')
            ->andWhere('m.id > :lastId')
            ->setParameter('chat', $chat)
            ->setParameter('lastId', $lastMessageId)
            ->orderBy('m.createAt', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Mark all messages in a chat as read for a user
     */
    public function markAllAsRead(SubjectChat $chat, User $user): void
    {
        $this->createQueryBuilder('m')
            ->update()
            ->set('m.isRead', ':isRead')
            ->where('m.subjectChat = :chat')
            ->andWhere('m.sender != :user')
            ->setParameter('isRead', true)
            ->setParameter('chat', $chat)
            ->setParameter('user', $user)
            ->getQuery()
            ->execute();
    }

    /**
     * Find messages for a subject chat
     */
    public function findSubjectChatMessages(SubjectChat $chat, int $limit = 50): array
    {
        return $this->createQueryBuilder('m')
            ->where('m.subjectChat = :chat')
            ->setParameter('chat', $chat)
            ->orderBy('m.createAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
