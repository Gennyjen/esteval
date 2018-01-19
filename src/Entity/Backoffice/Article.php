<?php

namespace App\Entity\Backoffice;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
    class Post {
        /**
         * @ORM\Id
         * @ORM\GeneratedValue
         * @ORM\Column(type="integer")
         */
        private $id;

        /**
         * @ORM\Column(type="string", length=100)
         */
        private $rubrique;

        /**
         * @ORM\Column(type="string", length=100)
         */
        private $content;

        /**
         * @ORM\Column(type="string", length=100)
         */
        private $author;

        /**
         * @ORM\Column(type="datetime", options={"default": "CURRENT_TIMESTAMP"})
         */
        private $timestamp;

        /**
         * @ORM\Column(type="string", length=100)
         */
        private $title;







}
