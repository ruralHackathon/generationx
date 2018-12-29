<?php

namespace App\Repository;

use App\Entity\Empleo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Empleo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Empleo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Empleo[]    findAll()
 * @method Empleo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmpleoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Empleo::class);
    }

    // /**
    //  * @return Empleo[] Returns an array of Empleo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Empleo
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
