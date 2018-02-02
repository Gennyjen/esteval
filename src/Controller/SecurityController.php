<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class SecurityController extends Controller
{
    /**
     * @Route("/registration", name="security_register_user")
     * @param UserPasswordEncoderInterface $encoder
     * @param AuthenticationUtils $authUtils
     * @return Response
     */
    public function registerUser(UserPasswordEncoderInterface $encoder, AuthenticationUtils $authUtils)
    {
        $user = new User();

        $pass->setPassword($password);

        $passHash = $encoder->encodePassword($user, $pass); // password_hash
        $error = $authUtils->getLastAuthenticationError();

        $user->setPassword($passHash);
        $user->setUsername('admin');
        $user->setEmail('admin@example.com');
        $user->setRoles(['ROLE_USER']);

        $em = $this->getDoctrine()->getManager();
        $em->persist($user); // INSERT INTO app_user
        $em->flush();

        return $this->render('registration.html.twig', array(
            'pass'  => $passHash,
            'error' => $error,
        ));
    }
}