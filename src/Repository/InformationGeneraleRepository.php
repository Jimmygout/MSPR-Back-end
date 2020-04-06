<?php

namespace App\Repository;

use App\Entity\InformationGenerale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InformationGenerale|null find($id, $lockMode = null, $lockVersion = null)
 * @method InformationGenerale|null findOneBy(array $criteria, array $orderBy = null)
 * @method InformationGenerale[]    findAll()
 * @method InformationGenerale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InformationGeneraleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InformationGenerale::class);
    }

    // /**
    //  * @return InformationGenerale[] Returns an array of InformationGenerale objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InformationGenerale
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
