<?php

    namespace App\Entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity(repositoryClass="App\Repository\ArticlesRepository")
     */
    class Articles
    {
        /**
         * @ORM\Id
         * @ORM\GeneratedValue
         * @ORM\Column(type="integer")
         */
        private $id;

        /**
         * @ORM\Column(type="date")
         */
        private $datePublication;

        /**
         * @ORM\Column(type="string")
         */
        private $titre;

        /**
         * @ORM\Column(type="string")
         */
        private $texte;

        /**
         * @ORM\Column(type="string")
         */
        private $texteRaw;

        /**
         * @ORM\Column(type="string")
         */
        private $images;

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id): void
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getDatePublication()
        {
            return $this->datePublication;
        }

        /**
         * @param mixed $datePublication
         */
        public function setDatePublication($datePublication): void
        {
            $this->datePublication = $datePublication;
        }

        /**
         * @return mixed
         */
        public function getTitre()
        {
            return $this->titre;
        }

        /**
         * @param mixed $titre
         */
        public function setTitre($titre): void
        {
            $this->titre = $titre;
        }

        /**
         * @return mixed
         */
        public function getTexte()
        {
            return $this->texte;
        }

        /**
         * @param mixed $texte
         */
        public function setTexte($texte): void
        {
            $this->texte = $texte;
        }

        /**
         * @return mixed
         */
        public function getTexteRaw()
        {
            return $this->texteRaw;
        }

        /**
         * @param mixed $texteRaw
         */
        public function setTexteRaw($texteRaw): void
        {
            $this->texteRaw = $texteRaw;
        }

        /**
         * @return mixed
         */
        public function getImages()
        {
            return $this->images;
        }

        /**
         * @param mixed $images
         */
        public function setImages($images): void
        {
            $this->images = $images;
        }




    }
