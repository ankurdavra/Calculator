<?php

namespace App\Repository;

use App\Entity\Calculator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Calculator|null find($id, $lockMode = null, $lockVersion = null)
 * @method Calculator|null findOneBy(array $criteria, array $orderBy = null)
 * @method Calculator[]    findAll()
 * @method Calculator[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CalculatorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Calculator::class);
    }

    public function findAllLast24Hour(): array
    {
        $entityManager = $this->getEntityManager();

        $last24hour =  date('Y-m-d h:i:s', strtotime("-1 day"));

        $query = $entityManager->createQuery(
            'SELECT c
            FROM App\Entity\Calculator c
            WHERE c.created > :created
            ORDER BY c.id DESC'
        )->setParameter('created', $last24hour);

        return $query->getResult();
    }
}
