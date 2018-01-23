<?php

namespace App\Controller;

use App\Entity\ContactEntreprise;
use App\Entity\ContactParticulier;
use App\Form\ContactEntrepriseAdd;
use App\Form\ContactParticulierAdd;
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
        $contact = new ContactEntrepriseAdd();

        $form = $this->createForm(ContactEntrepriseAdd::class, $contact);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $contactToSave = $form->getData();

            return $this->redirectToRoute('confirmation');
        }

        return $this->render('registration.html.twig', [
            'formEntrepriseAdd' => $form->createView(),
        ]);
    }


    /**
     * @Route("/registration", name="inscriptionParticulier_add")
     */
    public function addParticulier(Request $request)
    {
        $contact = new ContactParticulierAdd();

        $form = $this->createForm(ContactParticulierAdd::class, $contact);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $contactToSave = $form->getData();

            return $this->redirectToRoute('confirmation');
        }

        return $this->render('registration.html.twig', [
            'formParticulierAdd' => $form->createView(),
        ]);
    }

}