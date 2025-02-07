<?php

namespace App\Repository;

use App\Entity\Categorie;
use App\Entity\Classe;
use App\Entity\SkillLevel;
use App\Entity\Specialite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Categorie>
 *
 * @method Categorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categorie[]    findAll()
 * @method Categorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categorie::class);
    }

    public function save(Categorie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Categorie $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Find categories that have courses for a given skill level
     * @param SkillLevel $skillLevel
     * @return Categorie[]
     */
    public function findBySkillLevel(SkillLevel $skillLevel): array
    {
        return $this->createQueryBuilder('c')
            ->join('c.cours', 'co')
            ->join('co.classe', 'cl')
            ->andWhere('cl.skillLevel = :skillLevel')
            ->andWhere('co.isValidated = :isValidated')
            ->setParameter('skillLevel', $skillLevel)
            ->setParameter('isValidated', true)
            ->distinct()
            ->getQuery()
            ->getResult();
    }

   /**
    * @return Categorie[] Returns an array of Categorie objects
    */
    public function findBCategories(int $maxResult = null): array
    {
        $qb = $this->createQueryBuilder('c')
            ->join('c.cours', 'co')
            ->andWhere('co.isValidated = :isValidated')
            ->setParameter('isValidated', true)
            ->distinct();

        if ($maxResult) {
            $qb->setMaxResults($maxResult);
        }

        return $qb->getQuery()->getResult();
    }

    public function findBCategoriesForum(int $maxResult = null): array
    {
        return $this->createQueryBuilder('c')
            ->join('c.cours', 'co')
            ->join('co.forum', 'f')
            ->join('f.sujets', 's')
            ->andWhere('co.isValidated = :isValidated')
            ->setParameter('isValidated', true)
            ->orderBy('c.name', 'ASC')
            ->setMaxResults($maxResult)
            ->getQuery()
            ->getResult()
            ;
    }

    public function findCats(bool $isSub = false) 
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.isSubCategory = :isSub')
            ->setParameter('isSub', $isSub)
            ->orderBy('c.name', 'ASC');
    }

    public function findByClasseAndSpecialite(Classe $classe, Specialite $specialite): array
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.classes', 'cl')
            ->leftJoin('c.specialites', 'sp')
            ->where('cl.id = :classe')
            ->andWhere('sp.id = :specialite')
            ->setParameter('classe', $classe->getId())
            ->setParameter('specialite', $specialite->getId())
            ->orderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
