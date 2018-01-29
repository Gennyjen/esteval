<?php

    namespace App\Entity;

    use App\Form\ParticulierType;
    use App\Form\EntrepriseType;
    use Doctrine\ORM\Mapping as ORM;
    use Symfony\Component\Validator\Constraints as Assert;


    /**
     * @ORM\Entity(repositoryClass="App\Repository\ArticlesRepository")
     */
    class Articles
    {
        /**
         * @ORM\Column(type="date")
         */
        private $DATE_PUBLICATION_YYYYMMDD;

        /**
         * @ORM\Column(type="string")
         */
        private $TITRE;

        /**
         * @ORM\Column(type="string")
         */
        private $TEXTE;

        /**
         * @ORM\Column(type="string")
         */
        private $TEXTE_RAW;


}
