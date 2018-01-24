<?php

namespace App\Repository;

<<<<<<< HEAD
use App\Entity\ContactParticulier;
=======
use App\Entity\Particulier;
>>>>>>> registration
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ContactParticulierRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
<<<<<<< HEAD
        parent::__construct($registry, ContactParticulier::class);
=======
        parent::__construct($registry, Particulier::class);
>>>>>>> registration
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('c')
            ->where('c.something = :value')->setParameter('value', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
