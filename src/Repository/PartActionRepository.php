<?php

namespace App\Repository;

use App\Entity\PartAction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PartAction>
 *
 * @method PartAction|null find($id, $lockMode = null, $lockVersion = null)
 * @method PartAction|null findOneBy(array $criteria, array $orderBy = null)
 * @method PartAction[]    findAll()
 * @method PartAction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PartActionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PartAction::class);
    }

//    /**
//     * @return PartAction[] Returns an array of PartAction objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PartAction
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
