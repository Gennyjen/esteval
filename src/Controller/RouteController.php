<?php

    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\HttpFoundation\Response;

    class RouteController extends Controller
    {


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

    /**
     * @Route("/patrimoine-et-finance", name="patrimoine-et-finance")
     */
    public function patrimoineEtFinance()
    {
        return $this->render('patrimoine-et-finance.html.twig');
    }


    /**
     * @Route("/entreprises-et-initiatives", name="entreprises-et-initiatives")
     */
    public function entreprisesEtInitiatives()
    {
        return $this->render('entreprises-et-initiatives.html.twig');
    }

     /**
     * @Route("/culture-et-perspectives", name="culture-et-perspectives")
     */
    public function cultureEtPerspectives()
    {
        return $this->render('culture-et-perspectives.html.twig');
    }

     /**
     * @Route("/mentions-legales", name="mentions-legales")
     */
    public function mentionsLegales()
    {
        return $this->render('mentions-legales.html.twig');
    }
    
     /**
     * @Route("/pro", name="pro")
     */
    public function pro()
    {
        return $this->render('professionnel/professionnel.html.twig');

    }

    /**
     * @Route("/moncompte", name="moncompte")
     */
    public function monCompte()
    {
        return $this->render('moncompte.html.twig');
    }

    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion()
    {
        return $this->render('login.html.twig');
    }

    /**
     * @Route("/success", name="success")
     */
    public function success()
    {
        return $this->render('success.html.twig');
    }

}
