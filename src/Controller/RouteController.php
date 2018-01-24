<?php

    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\HttpFoundation\Response;

    class RouteController extends Controller
    {
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }
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

    /**
     * @Route("/abonnements", name="abonnements")
     */
    public function abonnements()
    {
        return $this->render('abonnements.html.twig');
    }

    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
<<<<<<< HEAD
        return $this->render('header.html.twig');

    }

    /**
     * @Route("/footer", name="footer")
     */
    public function footer()
    {
        return $this->render('footer.html.twig');
    }

    /**
     * @Route("/sidebar", name="sidebar")
     */
    public function sidebar()
    {
        return $this->render('sidebar.html.twig');
    }

    /**
     * @Route("/company", name="company")
     */
    public function company()
    {
        return $this->render('company.html.twig');
    }
=======
        return $this->render('index.html.twig');
    }

>>>>>>> registration
    /**
     * @Route("/confirmation", name="confirmation")
     */
    public function confirmation()
    {
        return $this->render('confirmation.html.twig');
    }
}
