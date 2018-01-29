<?php

    namespace App\Repository;

    use App\Entity\Articles;
    use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
    use Symfony\Bridge\Doctrine\RegistryInterface;

    class ArticlesRepository extends ServiceEntityRepository
    {


        public function findArticles()
        {
            $sql = "SELECT DATE_PUBLICATION_YYYYMMDD, TITRE, TEXTE, TEXTE_RAW FROM larticle LIMIT 10";

            $stmt = $this->getEntityManager()->getConnection()->prepare($sql);
            $stmt->execute([]);

            return $stmt->fetchAll();
        }




    }
