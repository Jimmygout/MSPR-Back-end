<?php

namespace App\Repository;

use App\Entity\Buvette;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Buvette|null find($id, $lockMode = null, $lockVersion = null)
 * @method Buvette|null findOneBy(array $criteria, array $orderBy = null)
 * @method Buvette[]    findAll()
 * @method Buvette[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BuvetteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Buvette::class);
    }

    // /**
    //  * @return Buvette[] Returns an array of Buvette objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Buvette
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
