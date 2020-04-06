<?php

namespace App\Repository;

use App\Entity\StandInformation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StandInformation|null find($id, $lockMode = null, $lockVersion = null)
 * @method StandInformation|null findOneBy(array $criteria, array $orderBy = null)
 * @method StandInformation[]    findAll()
 * @method StandInformation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StandInformationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StandInformation::class);
    }

    // /**
    //  * @return StandInformation[] Returns an array of StandInformation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StandInformation
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
