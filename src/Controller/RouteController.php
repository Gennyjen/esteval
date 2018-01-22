<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class RouteController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('login.html.twig');
    }
    /**
     * @Route("/registration", name="registration")
     */
    public function registration()
    {
        return $this->render('registration.html.twig');
    }
}