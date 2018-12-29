<?php

namespace App\Repository;

use App\Entity\Gimnasio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Gimnasio|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gimnasio|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gimnasio[]    findAll()
 * @method Gimnasio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GimnasioRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Gimnasio::class);
    }

    // /**
    //  * @return Gimnasio[] Returns an array of Gimnasio objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Gimnasio
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
