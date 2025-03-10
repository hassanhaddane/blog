<?php

namespace App\Repository;

use App\Entity\TpContact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TpContact|null find($id, $lockMode = null, $lockVersion = null)
 * @method TpContact|null findOneBy(array $criteria, array $orderBy = null)
 * @method TpContact[]    findAll()
 * @method TpContact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TPContactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TPContact::class);
    }

    // /**
    //  * @return TPContact[] Returns an array of TPContact objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TPContact
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
