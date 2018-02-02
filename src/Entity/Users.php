<?php

    namespace App\Entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
     * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
     */
    class Users
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
        private $type;

        /**
         * @ORM\Column(type="string")
         */
        private $nom;

        /**
         * @ORM\Column(type="string")
         */
        private $prenom;

        /**
         * @ORM\Column(type="string")
         */
        private $adresse;

        /**
         * @ORM\Column(type="string")
         */
        private $cp;

        /**
         * @ORM\Column(type="string")
         */
        private $ville;

        /**
         * @ORM\Column(type="string")
         */
        private $pays;

        /**
         * @ORM\Column(type="string")
         */
        private $telephone;

        /**
         * @ORM\Column(type="string")
         */
        private $email;

        /**
         * @ORM\Column(type="string")
         */
        private $password;

        /**
         * @ORM\Column(type="date")
         */
        private $dateCreated;




    }
