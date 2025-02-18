<?php

namespace App\Repository;

use App\Entity\MatiereCycle;
use App\Entity\Classe;
use App\Entity\SkillLevel;
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

    public function findAvailableSubjects(?Classe $classe, ?SkillLevel $skillLevel): array
    {
        $qb = $this->createQueryBuilder('m')
            ->orderBy('m.id', 'ASC');

        if ($classe) {
            $qb->andWhere('m.classe = :classe')
               ->setParameter('classe', $classe);
        }

        if ($skillLevel) {
            $qb->andWhere('m.skillLevel = :skillLevel')
               ->setParameter('skillLevel', $skillLevel);
        }

        return $qb->getQuery()->getResult();
    }
}
