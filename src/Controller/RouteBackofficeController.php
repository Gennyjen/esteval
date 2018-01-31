<?php

    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\Routing\Annotation\Route;


    class RouteBackofficeController extends Controller
    {
        /**
         * @Route("/backoffice/dashboard", name="dashboard")
         */
        public function dashboard()
        {
            return $this->render('/backoffice/dashboard.html.twig');
        }

        /**
         * @Route("/backoffice/article", name="article")
         */
        public function article()
        {
            return $this->render('/backoffice/article.html.twig');
        }

        /**
         * @Route("/backoffice/editorNewsletter", name="editorNewsletter")
         */
        public function editorNewsletter()
        {

            return $this->render('/backoffice/editorNewsletter.html.twig');
        }

        /**
         * @Route("/backoffice/editorMagazine", name="editorMagazine")
         */
        public function editorMagazine()
        {
            return $this->render('/backoffice/editorMagazine.html.twig');
        }

        /**
         * @Route("/backoffice/abonnes", name="abonnes")
         */
        public function abonnes()
        {
            return $this->render('/backoffice/abonnes.html.twig');
        }

        /**
         * @Route("/backoffice/template", name="template")
         */
        public function template()
        {
            return $this->render('/backoffice/template.html.twig');
        }

        /**
         * @Route("/backoffice/magazine", name="magazine")
         */
        public function magazine()
        {
            return $this->render('/backoffice/magazine.html.twig');
        }

        /**
         * @Route("/backoffice/upgrade", name="upgrade")
         */
        public function upgrade()
        {
            return $this->render('/backoffice/upgrade.html.twig');
        }

        /**
         * @Route("/backoffice/editorArticle", name="editorArticle")
         */
        public function editorArticle()
        {
            return $this->render('/backoffice/editorArticle.html.twig');
        }

}