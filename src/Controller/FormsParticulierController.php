<?php

namespace App\Controller;

use App\Entity\Particulier;
use App\Entity\Entreprise;
use App\Form\ParticulierType;
use App\Form\EntrepriseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;

class FormsParticulierController extends Controller
{

    /**
     * @Route("/registration", name="registration")
     * @param Request $request
     * @return Response
     */
    public function formsAddNewParticulier(Request $request)
    {
        $particulier = new Particulier();
        $entreprise = new Entreprise();
        $particulier->setEntreprise($entreprise);

        $formParticulier = $this->createForm(ParticulierType::class, $particulier);

        $formParticulier->handleRequest($request);

           if($request->getMethod() == 'POST' && $formParticulier->isSubmitted() && $formParticulier->isValid())
           {
                return new Response('Les données ont bien été sauvegardées!');
           }

        return $this->render('registration.html.twig', array('form' => $formParticulier->createView()));
    }


}


