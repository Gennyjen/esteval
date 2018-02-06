<?php

namespace App\Entity;

use App\Form\UserType;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
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
    private $isCompany;

    /**
     * @ORM\Column(type="boolean")
     */
    private $chooseNewsletter;

    /**
     * @ORM\Column(type="array")
     */
    private $roles;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(name="rdvfin", type="datetime")
     */
    private $dateCreated;



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
     * @param mixed $isCompany
     */
    public function setIsCompany($isCompany): void
    {
        $this->isCompany = $isCompany;
    }

    /**
     * @return mixed
     */
    public function getIsCompany()
    {
        return $this->isCompany;
    }

    /**
     * @return mixed
     */
    public function getChooseNewsletter()
    {
        return $this->chooseNewsletter;
    }

    /**
     * @param mixed $chooseNewsletter
     */
    public function setChooseNewsletter($chooseNewsletter): void
    {
        $this->chooseNewsletter = $chooseNewsletter;
    }

    /**
     * @return mixed
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param mixed $roles
     */
    public function setRoles($roles): void
    {
        $this->roles = $roles;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * @return mixed
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param mixed $dateCreated
     */
    public function setDateCreated($dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }


}
