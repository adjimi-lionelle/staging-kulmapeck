<?php

namespace App\Repository;

use App\Entity\WebSocketConnection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WebSocketConnection>
 *
 * @method WebSocketConnection|null find($id, $lockMode = null, $lockVersion = null)
 * @method WebSocketConnection|null findOneBy(array $criteria, array $orderBy = null)
 * @method WebSocketConnection[]    findAll()
 * @method WebSocketConnection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WebSocketConnectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WebSocketConnection::class);
    }

//    /**
//     * @return WebSocketConnection[] Returns an array of WebSocketConnection objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('w.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?WebSocketConnection
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
