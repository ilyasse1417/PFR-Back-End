<?php

namespace App\Repository;

use App\Entity\CraftsmanImage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CraftsmanImage>
 *
 * @method CraftsmanImage|null find($id, $lockMode = null, $lockVersion = null)
 * @method CraftsmanImage|null findOneBy(array $criteria, array $orderBy = null)
 * @method CraftsmanImage[]    findAll()
 * @method CraftsmanImage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CraftsmanImageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CraftsmanImage::class);
    }

    public function save(CraftsmanImage $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CraftsmanImage $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CraftsmanImage[] Returns an array of CraftsmanImage objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CraftsmanImage
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
