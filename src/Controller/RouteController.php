<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Entity\Magasines;
use App\Entity\Rubriques;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Tools\Pagination\Paginator;

class RouteController extends Controller
{


    /**
     * @Route("/abonnements", name="abonnements")
     */
    public function abonnements()
    {
        return $this->render('abonnements.html.twig');
    }

    /**
     * @Route("/article", name="article")
     */
    public function article(Request $request)
    {

        $articles = $this->getDoctrine()->getRepository(Articles::class);
        $id = $request->query->get('id');

        $oneArticle = $articles->findBy(['id' => $id]);
        foreach($oneArticle as $currentArticle ) {
            $currentArticle
                ->setIdRubrique($this->getDoctrine()->getRepository(Rubriques::class)
                    ->find($currentArticle->getIdRubrique())
                    ->getNom());
        }

        return $this->render('page-article.html.twig',['article' => $oneArticle]);
    }


    /**
     * @Route("/company", name="company")
     */
    public function company()
    {
        return $this->render('company.html.twig');
    }

    /**
     * @Route("/librairie", name="librairie")
     */
    public function librairie()
    {
        return $this->render('librairie.html.twig');
    }

    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getRepository(Articles::class);
        $articles = $em->findBy([], ['datePublication' => 'DESC'], 10);
        $firstArticle = array_shift($articles);

        foreach($articles as $currentArticle ) {
            $currentArticle
                ->setIdRubrique($this->getDoctrine()->getRepository(Rubriques::class)
                ->find($currentArticle->getIdRubrique())
                ->getNom());
        }


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
    public function patrimoineEtFinance(Request $request)
    {


        $em = $this->getDoctrine()->getRepository(Articles::class);
        $articles = $em->findBy([], ['datePublication' => 'DESC'], 10, 30);

        foreach($articles as $currentArticle ) {
            $currentArticle
                ->setIdRubrique($this->getDoctrine()->getRepository(Rubriques::class)
                    ->find($currentArticle->getIdRubrique())
                    ->getNom());
        }


        return $this->render('patrimoine-et-finance.html.twig',['articles' => $articles]);
    }


    /**
     * @Route("/entreprises-et-initiatives", name="entreprises-et-initiatives")
     */
    public function entreprisesEtInitiatives()
    {
        $em = $this->getDoctrine()->getRepository(Articles::class);
        $articles = $em->findBy([], ['datePublication' => 'DESC'], 10, 40);

        foreach($articles as $currentArticle ) {
            $currentArticle
                ->setIdRubrique($this->getDoctrine()->getRepository(Rubriques::class)
                    ->find($currentArticle->getIdRubrique())
                    ->getNom());
        }


        return $this->render('entreprises-et-initiatives.html.twig',['articles' => $articles]);
    }

    /**
     * @Route("/culture-et-perspectives", name="culture-et-perspectives")
     */
    public function cultureEtPerspectives()
    {
        $em = $this->getDoctrine()->getRepository(Articles::class);
        $articles = $em->findBy([], ['datePublication' => 'DESC'], 10, 50);

        foreach($articles as $currentArticle ) {
            $currentArticle
                ->setIdRubrique($this->getDoctrine()->getRepository(Rubriques::class)
                    ->find($currentArticle->getIdRubrique())
                    ->getNom());
        }


        return $this->render('culture-et-perspectives.html.twig',['articles' => $articles]);
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
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('contacter-esteval.html.twig');
    }

    /**
     * @Route("/ajax/{cat_id}", name="ajax")
     */
    public function ajax(Request $request, $cat_id)
    {
        $mag = $this->getDoctrine()->getRepository(Magasines::class);

        $page = $request->query->get('page');
        if (!isset($page)) {
            $page = 1;
        }
        $limit = 3;

        if ( $cat_id != 0 ) {

            // $magasines = $mag->findBy(['catId' => $cat_id]);
            $magasines = $mag->findBy(['catId' => $cat_id], ['numero' => 'DESC'], $limit, $limit*($page - 1));

            $totalPages = ceil(count($mag->findBy(['catId' => $cat_id])) / $limit);

            $data = [
                'data' => [],
                'pagination' => [
                    'page' => $page,
                    'pageTotal' => $totalPages
                ]
            ];
            foreach ($magasines as $magasine) {
                $data['data'][] = [
                    'id' => $magasine->getId(),
                    'numero' => $magasine->getNumero(),
                    'moisParution' => $magasine->getMoisParution(),
                    'titre' => $magasine->getTitre(),
                    'couverture' => $magasine->getCouverture()
                ];
            }
        } else {
            // Magasines 'Les derniers parus'
            $magasines = [];
            $magasines[] = $mag->findBy(['catId' => 1], ['moisParution' => 'DESC'], 1);
            $magasines[] = $mag->findBy(['catId' => 2], ['moisParution' => 'DESC'], 1);
            $magasines[] = $mag->findBy(['catId' => 3], ['moisParution' => 'DESC'], 1);

            $data = [
                'data' => [],
                'pagination' => [
                    'page' => 1,
                    'pageTotal' => 1
                ]
            ];
            foreach ($magasines as $magasine) {

                $data['data'][] = [
                    'id' => $magasine[0]->getId(),
                    'numero' => $magasine[0]->getNumero(),
                    'moisParution' => $magasine[0]->getMoisParution(),
                    'titre' => $magasine[0]->getTitre(),
                    'couverture' => $magasine[0]->getCouverture()
                ];
            }

        }

        return new JsonResponse($data);
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

    }

    /**
     * @Route("/success", name="success")
     */
    public function success()
    {
        return $this->render('success.html.twig');
    }

    /**
     * @Route("/sidebar", name="sidebar")
     */
    public function sidebar() {
        $em = $this->getDoctrine()->getRepository(Articles::class);
        $articleSidebar = $em->findBy([], ['datePublication' => 'DESC'], 5, 40);



        return $this->render('sidebar.html.twig',['articleSidebar' => $articleSidebar]);
    }

}