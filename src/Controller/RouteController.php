<?php

    namespace App\Controller;

    use App\Entity\Articles;
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
        $em = $this->getDoctrine()->getRepository(Articles::class);
        $articles = $em->findBy([], ['datePublication' => 'DESC'], 10);
        $firstArticle = array_shift($articles);
        return $this->render('index.html.twig',['articles' => $articles, 'firstArticle' => $firstArticle]); // Premier article retiré dans la liste ** Premier article gardé pour le carousel
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
<<<<<<< HEAD
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('contacter-esteval.html.twig');
    }

    /**
     * @Route("/gestion-patrimoine", name="gestion-patrimoine")
     */
    public function gestionPatrimoine()
    {
        return $this->render('professionnel/gestion-patrimoine.html.twig');
    }

    /**
     * @Route("/immobilier", name="immobilier")
     */
    public function immobilier()
    {
        return $this->render('professionnel/immobilier.html.twig');
    }

    /**
     * @Route("/financement-entreprise", name="financement-entreprise")
     */
    public function financementEntreprise()
    {
        return $this->render('professionnel/financement-entreprise.html.twig');
    }

    /**
     * @Route("/gestion-institutionnelle", name="gestion-institutionnelle")
     */
    public function gestionInstitutionnelle()
    {
        return $this->render('professionnel/gestion-institutionnelle.html.twig');
=======
     * @Route("/success", name="success")
     */
    public function success()
    {
        return $this->render('success.html.twig');
>>>>>>> backoffice-backend-
    }

}

