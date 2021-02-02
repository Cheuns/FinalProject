<?php

namespace App\Repository;

use App\Entity\CollectionFavoris;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CollectionFavoris|null find($id, $lockMode = null, $lockVersion = null)
 * @method CollectionFavoris|null findOneBy(array $criteria, array $orderBy = null)
 * @method CollectionFavoris[]    findAll()
 * @method CollectionFavoris[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CollectionFavorisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CollectionFavoris::class);
    }

    // /**
    //  * @return CollectionFavoris[] Returns an array of CollectionFavoris objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CollectionFavoris
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
