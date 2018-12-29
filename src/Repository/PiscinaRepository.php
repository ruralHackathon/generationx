<?php

namespace App\Repository;

use App\Entity\Piscina;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Piscina|null find($id, $lockMode = null, $lockVersion = null)
 * @method Piscina|null findOneBy(array $criteria, array $orderBy = null)
 * @method Piscina[]    findAll()
 * @method Piscina[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PiscinaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Piscina::class);
    }

    // /**
    //  * @return Piscina[] Returns an array of Piscina objects
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
    public function findOneBySomeField($value): ?Piscina
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
