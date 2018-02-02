<?php

    namespace App\Entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity(repositoryClass="App\Repository\RubriquesRepository")
     */
    class Rubriques
    {
        /**
         * @ORM\Id
         * @ORM\GeneratedValue
         * @ORM\Column(type="integer")
         */
        private $id;

        /**
         * @ORM\Column(type="string")
         */
        private $nom;

        /**
         * @ORM\Column(type="string")
         */
        private $code;

        /**
         * @ORM\Column(type="string")
         */
        private $idTheme;


    }
