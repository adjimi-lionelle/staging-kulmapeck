<?php

namespace App\Repository;

use App\Entity\Categorie;
use App\Entity\Classe;
use App\Entity\Exam;
use App\Entity\SkillLevel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Exam>
 *
 * @method Exam|null find($id, $lockMode = null, $lockVersion = null)
 * @method Exam|null findOneBy(array $criteria, array $orderBy = null)
 * @method Exam[]    findAll()
 * @method Exam[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExamRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Exam::class);
    }

    public function save(Exam $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Exam $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
        * @return Exam[] Returns an array of Exam objects
        */
    public function findByFilter(?string $language, ?Categorie $category, ?Classe $classe): array
    {
        $query = $this->createQueryBuilder('e');

        if ($language) {
            $query->andWhere('e.language = :language')
                  ->setParameter('language', $language);
        }

        if ($category) {
            $query->andWhere('e.category = :category')
                  ->setParameter('category', $category);
        }

        if ($classe) {
            $query->andWhere('e.classe = :classe')
                  ->setParameter('classe', $classe);
            
            // Use skillLevel from classe
            $skillLevel = $classe->getSkillLevel();
            if ($skillLevel) {
                $query->andWhere('e.skillLevel = :skillLevel')
                      ->setParameter('skillLevel', $skillLevel);
            }
        }
        
        return $query
            ->andWhere('e.isValidated = :isValidated')
            ->setParameter('isValidated', true)
            ->orderBy('e.publishedAt', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

//    public function findOneBySomeField($value): ?Exam
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
