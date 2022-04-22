<?php


namespace App\Repository;
use App\Entity\Cinema;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method Cinema|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cinema|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cinema[]    findAll()
 * @method Cinema[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CinemaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cinema::class);
    }

    // /**
    //  * @return Cinema[] Returns an array of Cinema objects
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
    public function findOneBySomeField($value): ?Cinema
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function OrderByDat()
    {
        return $this->createQueryBuilder('m')
            ->orderBy('m.date','ASC')
            ->getQuery()->getResult()
            ;

    }
    public function OrderByName()
    {
        return $this->createQueryBuilder('m')
            ->orderBy('m.heurep ','ASC')
            ->getQuery()->getResult()
            ;

    }
    public function SearchName($data)
    {
        return $this->createQueryBuilder('m')
            ->where('m.date LIKE :data')->orWhere('m.heurep Like :data ')->orWhere('m.num Like :data ')
            ->setParameter('data', '%'.$data.'%')
            ->getQuery()->getResult()
            ;

    }
    public function searchdate (\DateTime $beginDate, \DateTime $endDate)
    {
        return $this->createQueryBuilder('m')
            ->where("m.date >= ?1")
            ->andWhere("m.date <= ?2")
            ->setParameter(1, $beginDate)
            ->setParameter(2, $endDate)
            ->getQuery()
            ->getResult();
    }
    public function OrderBydate()
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.date','ASC')
            ->getQuery()
            ->getResult()
            ;
    }
}