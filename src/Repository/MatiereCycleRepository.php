<?php

namespace App\Repository;

use App\Entity\MatiereCycle;
use App\Entity\Classe;
use App\Entity\Specialite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MatiereCycle>
 *
 * @method MatiereCycle|null find($id, $lockMode = null, $lockVersion = null)
 * @method MatiereCycle|null findOneBy(array $criteria, array $orderBy = null)
 * @method MatiereCycle[]    findAll()
 * @method MatiereCycle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatiereCycleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MatiereCycle::class);
    }

//    /**
//     * @return MatiereCycle[] Returns an array of MatiereCycle objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MatiereCycle
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

    public function findAvailableSubjects(?Classe $classe, ?Specialite $specialite): array
    {
        $qb = $this->createQueryBuilder('m')
            ->select('m')
            ->join('m.matiere', 'c') // Join with Categorie
            ->distinct();

        // For now, just get all subjects without specialite filtering
        // We'll need to update the data model to properly link categories with specialites

        return $qb->getQuery()->getResult();
    }
}
