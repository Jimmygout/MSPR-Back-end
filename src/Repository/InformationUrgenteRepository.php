<?php

namespace App\Repository;

use App\Entity\InformationUrgente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method InformationUrgente|null find($id, $lockMode = null, $lockVersion = null)
 * @method InformationUrgente|null findOneBy(array $criteria, array $orderBy = null)
 * @method InformationUrgente[]    findAll()
 * @method InformationUrgente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InformationUrgenteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InformationUrgente::class);
    }

    // /**
    //  * @return InformationUrgente[] Returns an array of InformationUrgente objects
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
    public function findOneBySomeField($value): ?InformationUrgente
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
