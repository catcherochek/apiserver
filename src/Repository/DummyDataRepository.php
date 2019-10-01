<?php

namespace App\Repository;

use App\Entity\DummyData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DummyData|null find($id, $lockMode = null, $lockVersion = null)
 * @method DummyData|null findOneBy(array $criteria, array $orderBy = null)
 * @method DummyData[]    findAll()
 * @method DummyData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DummyDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DummyData::class);
    }

    // /**
    //  * @return DummyData[] Returns an array of DummyData objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DummyData
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
