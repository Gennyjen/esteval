<?php

namespace App\Repository;

<<<<<<< HEAD
use App\Entity\ContactEntreprise;
=======
use App\Entity\Entreprise;
>>>>>>> registration
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ContactEntrepriseRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
<<<<<<< HEAD
        parent::__construct($registry, ContactEntreprise::class);
=======
        parent::__construct($registry, Entreprise::class);
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