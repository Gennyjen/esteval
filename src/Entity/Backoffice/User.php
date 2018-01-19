<?php

namespace App\Entity\Backoffice;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
    class User {
        /**
         * @ORM\Id
         * @ORM\GeneratedValue
         * @ORM\Column(type="integer")
         */
        private $id;

        /**
         * @ORM\Column(type="string", length=40)
         */
        private $firstname;

        /**
         * @ORM\Column(type="string", length=40)
         */
        private $lastname;

        /**
         * @ORM\Column(type="string", length=50)
         */
        private $mail

        /**
         * @ORM\Column(type="string", length=60)
         */
        private $address;

        /**
         * @ORM\Column(type="string", length=40)
         */
        private $city;

        /**
         * @ORM\Column(type="string", length=40)
         */
        private $country;

        /**
         * @ORM\Column(type="integer", length=20)
         */
        private $phone;

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }/**
         * @param mixed $id
         */
        public function setId($id): void
        {
            $this->id = $id;
        }/**
         * @return mixed
         */
        public function getFirstname()
        {
            return $this->firstname;
        }/**
         * @param mixed $firstname
         */
        public function setFirstname($firstname): void
        {
            $this->firstname = $firstname;
        }/**
         * @return mixed
         */
        public function getLastname()
        {
            return $this->lastname;
        }/**
         * @param mixed $lastname
         */
        public function setLastname($lastname): void
        {
            $this->lastname = $lastname;
        }/**
         * @return mixed
         */
        public function getMail()
        {
            return $this->mail;
        }/**
         * @param mixed $mail
         */
        public function setMail($mail): void
        {
            $this->mail = $mail;
        }/**
         * @return mixed
         */
        public function getAddress()
        {
            return $this->address;
        }/**
         * @param mixed $address
         */
        public function setAddress($address): void
        {
            $this->address = $address;
        }/**
         * @return mixed
         */
        public function getCity()
        {
            return $this->city;
        }/**
         * @param mixed $city
         */
        public function setCity($city): void
        {
            $this->city = $city;
        }/**
         * @return mixed
         */
        public function getCountry()
        {
            return $this->country;
        }/**
         * @param mixed $country
         */
        public function setCountry($country): void
        {
            $this->country = $country;
        }/**
         * @return mixed
         */
        public function getPhone()
        {
            return $this->phone;
        }/**
         * @param mixed $phone
         */
        public function setPhone($phone): void
        {
            $this->phone = $phone;
        }

    }
