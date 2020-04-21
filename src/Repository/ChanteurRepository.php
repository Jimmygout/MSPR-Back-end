<?php

namespace App\Repository;

use App\Entity\Chanteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Chanteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Chanteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chanteur[]    findAll()
 * @method Chanteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChanteurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chanteur::class);
    }

    // /**
    //  * @return Chanteur[] Returns an array of Chanteur objects
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
    public function findOneBySomeField($value): ?Chanteur
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
