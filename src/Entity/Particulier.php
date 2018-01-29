<?php

namespace App\Entity;

use App\Entity\Entreprise;
use App\Form\ParticulierType;
use App\Form\EntrepriseType;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ParticulierRepository")
 */
class Particulier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\NotBlank()
     */
    private $lastname;
    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\NotBlank()
     */
    private $firstname;
    /**
     * @ORM\Column(type="text", length=30)
     * @Assert\NotBlank()
     */
    private $email;
    /**
     * @ORM\Column(type="integer", length=30)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $phone;
    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank()
     */
    private $address;
    /**
     * @ORM\Column(type="integer", length=30)
     * @Assert\NotBlank()
     */
    private $zip;
    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\NotBlank()
     */
    private $city;
    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\NotBlank()
     */
    private $country;
    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\NotBlank()
     */
    private $company;
    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\NotBlank()
     */
    private $tva;
    /**
     * @ORM\Column(type="text", length=30)
     * @Assert\NotBlank()
     */
    private $password;
    /**
     * @ORM\Column(type="text", length=30)
     * @Assert\NotBlank()
     * @ORM\OneToOne(targetEntity=Entreprise::class)
     */
    private $entreprise;

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
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param mixed $zip
     */
    public function setZip($zip): void
    {
        $this->zip = $zip;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company): void
    {
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * @param mixed $tva
     */
    public function setTva($tva): void
    {
        $this->tva = $tva;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * @param mixed $entreprise
     */
    public function setEntreprise($entreprise): void
    {
        $this->entreprise = $entreprise;
    }

}
