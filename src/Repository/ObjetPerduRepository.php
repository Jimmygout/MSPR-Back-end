<?php

namespace App\Repository;

use App\Entity\ObjetPerdu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ObjetPerdu|null find($id, $lockMode = null, $lockVersion = null)
 * @method ObjetPerdu|null findOneBy(array $criteria, array $orderBy = null)
 * @method ObjetPerdu[]    findAll()
 * @method ObjetPerdu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObjetPerduRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ObjetPerdu::class);
    }

    // /**
    //  * @return ObjetPerdu[] Returns an array of ObjetPerdu objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ObjetPerdu
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
