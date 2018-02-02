<?php

    namespace App\Entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity(repositoryClass="App\Repository\MagasinesRepository")
     */
    class Magasines
    {
        /**
         * @ORM\Id
         * @ORM\GeneratedValue
         * @ORM\Column(type="integer")
         */
        private $id;

        /**
         * @ORM\Column(type="integer")
         */
        private $numero;

        /**
         * @ORM\Column(type="date")
    */
        private $moisParution;

        /**
         * @ORM\Column(type="string")
         */
        private $titre;

        /**
         * @ORM\Column(type="string")
         */
        private $couverture;

        /**
         * @ORM\Column(type="integer")
         */
        private $catId;

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
        public function getNumero()
        {
            return $this->numero;
        }

        /**
         * @param mixed $numero
         */
        public function setNumero($numero): void
        {
            $this->numero = $numero;
        }

        /**
         * @return mixed
         */
        public function getMoisParution()
        {
            return $this->moisParution;
        }

        /**
         * @param mixed $moisParution
         */
        public function setMoisParution($moisParution): void
        {
            $this->moisParution = $moisParution;
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
        public function getCouverture()
        {
            return $this->couverture;
        }

        /**
         * @param mixed $couverture
         */
        public function setCouverture($couverture): void
        {
            $this->couverture = $couverture;
        }

        /**
         * @return mixed
         */
        public function getCatId()
        {
            return $this->catId;
        }

        /**
         * @param mixed $catId
         */
        public function setCatId($catId): void
        {
            $this->catId = $catId;
        }






    }
