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

    }
}
