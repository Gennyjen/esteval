<?php

    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\HttpFoundation\Response;

    class AbonnementsController extends Controller
    {
        /**
         * @Route("/abonnements", name="abonnements")
         */
        public function login()
        {
            return $this->render('abonnements.html.twig');
        }
    }