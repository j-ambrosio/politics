<?php

namespace App\Repository;

use App\Entity\Congressperson;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Congressperson|null find($id, $lockMode = null, $lockVersion = null)
 * @method Congressperson|null findOneBy(array $criteria, array $orderBy = null)
 * @method Congressperson[]    findAll()
 * @method Congressperson[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CongresspersonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Congressperson::class);
    }

    // /**
    //  * @return Congressperson[] Returns an array of Congressperson objects
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
    public function findOneBySomeField($value): ?Congressperson
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
