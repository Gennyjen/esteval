<?php

namespace App\Controller;

use App\Entity\Entreprise;
use App\Entity\Particulier;
use App\Form\FormBuildEntreprise;
use App\Form\FormBuildParticulier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends Controller
{
    /**
     * @Route("/registration", name="inscriptionEntreprise_add")
     */
    public function addCompany(Request $request)
    {
        $contact = new Entreprise();

        $form = $this->createForm(FormBuildEntreprise::class, $contact);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $contactToSave = $form->getData();

            return $this->redirectToRoute('confirmation');
        }

        return $this->render('registration.html.twig', [
            'formEntreprise' => $form->createView(),
        ]);
    }


    /**
     * @Route("/registration", name="inscriptionParticulier_add")
     */
    public function addParticulier(Request $request)
    {
        $contact = new FormBuildParticulier();

        $form = $this->createForm(FormBuildParticulier::class, $contact);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $contactToSave = $form->getData();

            return $this->redirectToRoute('confirmation');
        }

        return $this->render('registration.html.twig', [
            'formParticulier' => $form->createView(),
        ]);
    }

}