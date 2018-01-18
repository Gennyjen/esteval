<?php

namespace App\Controller\Backoffice;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;


class DefaultController extends Controller
{
    /**
     * @Route("/backoffice/dashboard", name="dashboard")
     */
    public function dashboard()
    {
        return $this->render('/backoffice/dashboard.html.twig');
    }

    /**
     * @Route("/backoffice/icons", name="icons")
     */
    public function icons()
    {
        return $this->render('/backoffice/icons.html.twig');
    }

    /**
     * @Route("/backoffice/maps", name="maps")
     */
    public function maps()
    {
        return $this->render('/backoffice/maps.html.twig');
    }

    /**
     * @Route("/backoffice/notifications", name="notifications")
     */
    public function notifications()
    {
        return $this->render('/backoffice/notifications.html.twig');
    }

    /**
     * @Route("/backoffice/table", name="table")
     */
    public function table()
    {
        return $this->render('/backoffice/table.html.twig');
    }

    /**
     * @Route("/backoffice/template", name="template")
     */
    public function template()
    {
        return $this->render('/backoffice/template.html.twig');
    }

    /**
     * @Route("/backoffice/typography", name="typography")
     */
    public function typography()
    {
        return $this->render('/backoffice/typography.html.twig');
    }

    /**
     * @Route("/backoffice/upgrade", name="upgrade")
     */
    public function upagrade()
    {
        return $this->render('/backoffice/upgrade.html.twig');
    }

    /**
     * @Route("/backoffice/user", name="user")
     */
    public function user()
    {
        return $this->render('/backoffice/user.html.twig');
    }

    /**
     * @Route("/backoffice/base", name="base2")
     */
    public function base()
    {
        return $this->render('/backoffice/base.html.twig');
    }
}