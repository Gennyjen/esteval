<?php

namespace App\Entity;

use App\Form\ComptesUtilisateursType;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ParticulierRepository")
 */
class ComptesUtilisateurs
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=28)
     * @Assert\Length(
     *     max=28,
     *     maxMessage = "Le champs de votre nom ne doit pas comporter plus de {{ limit }} caractères"
     * )
     */
    private $lastname;
    /**
     * @ORM\Column(type="string", length=28)
     * @Assert\Length(
     *     max=28,
     *     maxMessage = "Le champs du prénom ne doit pas comporter plus de {{ limit }} caractères"
     * )
     */
    private $firstname;
    /**
     * @ORM\Column(type="text", length=30)
     * @Assert\Length(
     *     max=30,
     *     maxMessage = "Le champ de l'email ne doit pas comporter plus de {{ limit }} caractères"
     * )
     * @Assert\Email(strict=true, message="Le format de l'email est incorrect")
     * @Assert\Email(checkMX=true, message="Aucun serveur mail n'a été trouvé pour ce domaine")
     */
    private $email;
    /**
     * @ORM\Column(type="integer", length=28)
     * @Assert\Length(
     *     max=28,
     *     maxMessage = "Le champ du numéro de téléphone ne doit pas comporter plus de {{ limit }} caractères"
     * )
     */
    private $phone;
    /**
     * @ORM\Column(type="string", length=60)
     * @Assert\Length(
     *     max=60,
     *     maxMessage = "Le champ de l'adresse ne doit pas comporter plus de {{ limit }} caractères"
     * )
     */
    private $address;
    /**
     * @ORM\Column(type="integer", length=20)
     * @Assert\Length(
     *     max=20,
     *     maxMessage = "Votre nom ne doit pas comporter plus de {{ limit }} caractères"
     * )
     */
    private $zip;
    /**
     * @ORM\Column(type="string", length=26)
     * @Assert\Length(
     *     max=26,
     *     maxMessage = "Le champs de la ville ne doit pas comporter plus de {{ limit }} caractères"
     * )
     */
    private $city;
    /**
     * @ORM\Column(type="string", length=26)
     * @Assert\Length(
     *     max=26,
     *     maxMessage = "Le champ du pays ne doit pas comporter plus de {{ limit }} caractères"
     * )
     */
    private $country;
    /**
     * @ORM\Column(type="text", length=40)
     * @Assert\Length(
     *     min=8,
     *     max=40,
     *     maxMessage = "Le champs du mot de passe ne doit pas comporter plus de {{ limit }} caractères",
     *     minMessage = "Le champs du mot de passe ne nom ne doit pas comporter moins de {{ limit }} caractères"
     * )
     */
    private $password;
    /**
     * @ORM\Column(type="text", length=38)
     * @Assert\Length(
     *     max=38,
     *     maxMessage = "Le champs fonction ne doit pas comporter plus de {{ limit }} caractères",
     * )
     */
    private $fonction;
    /**
     * @ORM\Column(type="text", length=38)
     * @Assert\Length(
     *     max=38,
     *     maxMessage = "Le champs du mot de passe ne doit pas comporter plus de {{ limit }} caractères",
     * )
     */
    private $company;
    /**
     * @ORM\Column(type="text", length=68)
     * @Assert\Length(
     *     max=68,
     *     maxMessage = "Le champs du mot de passe ne doit pas comporter plus de {{ limit }} caractères",
     * )
     */
    private $tva;
    /**
     * @ORM\Column(type="boolean")
     */
    private $chooseParticulier;
    /**
     * @ORM\Column(type="boolean")
     */
    private $chooseCompany;
    /**
     * @ORM\Column(type="boolean")
     */
    private $chooseNewsletter;


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
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * @param mixed $fonction
     */
    public function setFonction($fonction): void
    {
        $this->fonction = $fonction;
    }

    /**
     * @return mixed
     */
    public function getChooseParticulier()
    {
        return $this->chooseParticulier;
    }

    /**
     * @param mixed $chooseParticulier
     */
    public function setChooseParticulier($chooseParticulier): void
    {
        $this->chooseParticulier = $chooseParticulier;
    }

    /**
     * @return mixed
     */
    public function getChooseCompany()
    {
        return $this->chooseCompany;
    }

    /**
     * @param mixed $chooseCompany
     */
    public function setChooseCompany($chooseCompany): void
    {
        $this->chooseCompany = $chooseCompany;
    }

    /**
     * @return mixed
     */
    public function getChooseNewsletter()
    {
        return $this->chooseNewsletter;
    }

    /**
     * @param mixed $chooseNewletter
     */
    public function setChooseNewsletter($chooseNewsletter): void
    {
        $this->chooseNewsletter = $chooseNewsletter;
    }


}