<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method reservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method reservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method reservation[]    findAll()
 * @method reservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }
    /**
    //  * @return Reserv[] Returns an array of Reserv objects

    //  */

    public function Search($data1,$data2)
    {
        return $this->createQueryBuilder('r')
            ->Where('r.dated >= :data1')
            ->andWhere('r.dated <= :data2')
            ->setParameter('data1', $data1)
            ->setParameter('data2', $data2)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findItemsCreatedBetweenTwoDates(\DateTime $beginDate, \DateTime $endDate)
    {
        return $this->createQueryBuilder('m')
            ->where("m.dated >= ?1")
            ->andWhere("m.dated <= ?2")
            ->setParameter(1, $beginDate)
            ->setParameter(2, $endDate)
            ->getQuery()
            ->getResult();
    }


    public function OrderByNameQB()
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.dated','ASC')
            ->getQuery()
            ->getResult()
            ;
    }


    public function findBydispo()
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            "SELECT *
         FROM App\Entity\Reservation r
         JOIN App\Entity\Cellule c
         WHERE r.idcell = c.idcellule 
         and c.dispo=1 ");

        // returns an array of Product objects
        return $query->execute();
    }


    /*
    public function findOneBySomeField($value): ?Reserv
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
