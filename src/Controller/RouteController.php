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
     * @Route("/registration", name="registration2")
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
     * @Route("/librairie", name="librairie")
     */
    public function librairie()
    {
        return $this->render('librairie.html.twig');
    }

    /**
     * @Route("/article", name="article")
     */
    public function article()
    {
        return $this->render('page-article.html.twig');
    }


    /**
     * @Route("/company", name="company")
     */
    public function company()
    {
        return $this->render('company.html.twig');
    }

    /**
     * @Route("/", name="index")
     */
    public function index()
    {
    return $this->render('index.html.twig');
    }

    /**
     * @Route("/confirmation", name="confirmation")
     */
    public function confirmation()
    {
        return $this->render('confirmation.html.twig');
    }
}
