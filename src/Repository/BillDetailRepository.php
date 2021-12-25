<?php

namespace App\Repository;

use App\Entity\BillDetail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BillDetail|null find($id, $lockMode = null, $lockVersion = null)
 * @method BillDetail|null findOneBy(array $criteria, array $orderBy = null)
 * @method BillDetail[]    findAll()
 * @method BillDetail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BillDetailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BillDetail::class);
    }

    // /**
    //  * @return BillDetail[] Returns an array of BillDetail objects
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
    public function findOneBySomeField($value): ?BillDetail
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
