<?php

namespace App\Repository;

use App\Entity\Pabellon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pabellon|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pabellon|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pabellon[]    findAll()
 * @method Pabellon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PabellonRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pabellon::class);
    }

    // /**
    //  * @return Pabellon[] Returns an array of Pabellon objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pabellon
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
