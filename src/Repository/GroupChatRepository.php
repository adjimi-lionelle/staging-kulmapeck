<?php

namespace App\Repository;

use App\Entity\GroupChat;
use App\Entity\Eleve;
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
class GroupChatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroupChat::class);
    }

    /**
     * Find chat groups for a student based on their class and subjects
     */
    public function findByStudent(Eleve $student): array
    {
        $classe = $student->getClasse();
        if (!$classe) {
            return [];
        }

        $qb = $this->createQueryBuilder('g')
            ->where('g.matiere IN (:subjects)')
            ->andWhere('g.cycle = :cycle')
            ->setParameter('subjects', $classe->getSpecialite()->getCategories())
            ->setParameter('cycle', $classe->getCycle())
            ->orderBy('g.createAt', 'DESC');

        return $qb->getQuery()->getResult();
    }

    /**
     * Find a group by subject and cycle
     */
    public function findOneBySubjectAndCycle(string $subject, int $cycle): ?GroupChat
    {
        return $this->createQueryBuilder('g')
            ->where('g.matiere = :subject')
            ->andWhere('g.cycle = :cycle')
            ->setParameter('subject', $subject)
            ->setParameter('cycle', $cycle)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findGroupsByCycle(int $cycle)
    {
        return $this->createQueryBuilder('g')
            ->where('g.cycle = :cycle')
            ->setParameter('cycle', $cycle)
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return GroupChat[] Returns an array of GroupChat objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?GroupChat
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
