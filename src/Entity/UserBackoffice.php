<?php

namespace App\Entity;

use App\Form\UserBackofficeType;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\UserBackofficeRepository")
 * @ORM\Table(name="UserBackoffice")
 */
class UserBackoffice
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", length=38)
     * @Assert\Length(
     *     max=38,
     *     maxMessage = "Le champs fonction ne doit pas comporter plus de {{ limit }} caractères",
     * )
     */
    private $fonction;

    /**
     * @ORM\Column(type="string", length=28)
     * @Assert\Length(
     *     max=28,
     *     maxMessage = "Le champs du prénom ne doit pas comporter plus de {{ limit }} caractères"
     * )
     */
    private $firstname;
    /**
     * @ORM\Column(type="string", length=28)
     * @Assert\Length(
     *     max=28,
     *     maxMessage = "Le champs du nom ne doit pas comporter plus de {{ limit }} caractères"
     * )
     */
    private $lastname;

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


}

