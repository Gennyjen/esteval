<?php

namespace App\Controller;

use App\Entity\Entreprise;
use App\Entity\Particulier;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FormController extends Controller
{

    public function addCompany(Request $request)
    {
        $contact = new Entreprise();

        $form = $this->createFormBuilder($contact);

        $form->add('lastname', TextType::class, [
            'attr' => [
                'id' => 'inputLastname',
                'aria-describedby' => 'lastname',
                'placeholder' => 'Nom',
                'class' => 'form-control',
            ]]);
        $form->add('firstname', 	TextType::class, [
            'attr' => [
                'id' => 'inputFirstname',
                'aria-describedby' => 'firstname',
                'placeholder' => 'Prénom',
                'class' => 'form-control',
            ]]);
        $form->add('email', 		EmailType::class, [
            'attr' => [
                'id' => 'inputEmail',
                'aria-describedby' => 'email',
                'placeholder' => 'adresse@mail.com',
                'class' => 'form-control',
            ]]);
        $form->add('address', 		TextType::class, [
            'attr' => [
                'id' => 'inputEmail',
                'aria-describedby' => 'address',
                'placeholder' => 'Adresse *',
                'class' => 'form-control',
            ]]);
        $form->add('company', 	TextType::class, [
            'attr' => [
                'id' => 'inputCompany',
                'aria-describedby' => 'company',
                'placeholder' => 'Société',
                'class' => 'form-control',
            ]]);
        $form->add('tva', 	TextType::class, [
            'attr' => [
                'id' => 'inputTva',
                'aria-describedby' => 'tva',
                'placeholder' => 'TVA',
                'class' => 'form-control',
            ]]);
        $form->add('city', 	TextType::class, [
            'attr' => [
                'id' => 'inputCity',
                'aria-describedby' => 'city',
                'placeholder' => 'Ville *',
                'class' => 'form-control',
            ]]);;
        $form->add('zip', 	TextType::class, [
            'attr' => [
                'id' => 'inputZip',
                'aria-describedby' => 'zip',
                'placeholder' => 'Code Postal *',
                'class' => 'form-control',
            ]]);
        $form->add('country', 	TextType::class, [
            'attr' => [
                'id' => 'inputCountry',
                'aria-describedby' => 'country',
                'placeholder' => 'Pays',
                'class' => 'form-control',
            ]]);;
        $form->add('phone', 	TextType::class, [
            'attr' => [
                'id' => 'inputPhone',
                'aria-describedby' => 'phone',
                'placeholder' => 'Téléphone',
                'class' => 'form-control',
            ]]);
        $form->add('password', 	TextType::class, [
            'attr' => [
                'id' => 'inputPassword',
                'aria-describedby' => 'password',
                'placeholder' => '*******',
                'class' => 'form-control',
            ]]);
        $form->add('save',		SubmitType::class, [
            'attr' => [
                'label_format' => 'Valider',
                'id' => 'submit',
                'class' => 'btn btn-primary btn-block',
            ]]);
        $form->getForm();


        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $form->getData();
            $contact = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            return $this->redirectToRoute('confirmation');
        }

        return $this->render('registration.html.twig', [
            'formEntreprise' => $form->createView(),
        ]);
    }



    public function addParticulier(Request $request)
    {
        $newParticulier = new particulier();

        $formParticulier = $this->createForm($newParticulier);

        $formParticulier->add('lastname', TextType::class, [
            'attr' => [
                'id' => 'inputLastname',
                'aria-describedby' => 'lastname',
                'placeholder' => 'Nom',
                'class' => 'form-control',
            ]]);
        $formParticulier->add('firstname', 	TextType::class, [
            'attr' => [
                'id' => 'inputFirstname',
                'aria-describedby' => 'firstname',
                'placeholder' => 'Prénom',
                'class' => 'form-control',
            ]]);
        $formParticulier->add('email', 		EmailType::class, [
            'attr' => [
                'id' => 'inputEmail',
                'aria-describedby' => 'email',
                'placeholder' => 'adresse@mail.com',
                'class' => 'form-control',
            ]]);
        $formParticulier->add('address', 		TextType::class, [
            'attr' => [
                'id' => 'inputEmail',
                'aria-describedby' => 'address',
                'placeholder' => 'Adresse *',
                'class' => 'form-control',
            ]]);
        $formParticulier->add('company', 	TextType::class, [
            'attr' => [
                'id' => 'inputCompany',
                'aria-describedby' => 'company',
                'placeholder' => 'Société',
                'class' => 'form-control',
            ]]);
        $formParticulier->add('tva', 	TextType::class, [
            'attr' => [
                'id' => 'inputTva',
                'aria-describedby' => 'tva',
                'placeholder' => 'TVA',
                'class' => 'form-control',
            ]]);
        $formParticulier->add('city', 	TextType::class, [
            'attr' => [
                'id' => 'inputCity',
                'aria-describedby' => 'city',
                'placeholder' => 'Ville *',
                'class' => 'form-control',
            ]]);;
        $formParticulier->add('zip', 	TextType::class, [
            'attr' => [
                'id' => 'inputZip',
                'aria-describedby' => 'zip',
                'placeholder' => 'Code Postal *',
                'class' => 'form-control',
            ]]);
        $formParticulier->add('country', 	TextType::class, [
            'attr' => [
                'id' => 'inputCountry',
                'aria-describedby' => 'country',
                'placeholder' => 'Pays',
                'class' => 'form-control',
            ]]);;
        $formParticulier->add('phone', 	TextType::class, [
            'attr' => [
                'id' => 'inputPhone',
                'aria-describedby' => 'phone',
                'placeholder' => 'Téléphone',
                'class' => 'form-control',
            ]]);
        $formParticulier->add('password', 	TextType::class, [
            'attr' => [
                'id' => 'inputPassword',
                'aria-describedby' => 'password',
                'placeholder' => '*******',
                'class' => 'form-control',
            ]]);
        $formParticulier->add('save',		SubmitType::class, [
            'attr' => [
                'label_format' => 'Valider',
                'id' => 'submit',
                'class' => 'btn btn-primary btn-block',
            ]]);

        $formParticulier->getForm();

        $formParticulier->handleRequest($request);

        if($formParticulier->isSubmitted() && $formParticulier->isValid()) {

            $newParticulier = $formParticulier->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($newParticulier);
            $em->flush();

            return $this->redirectToRoute('confirmation');
        }

        return $this->render('registration.html.twig', [
            'addNewParticulier' => $formParticulier->createView(),
        ]);
    }

    public function addEntreprise(Request $request)
    {
        $newEntreprise = new Entreprise();

        $formEntreprise = $this->createFormBuilder($newEntreprise);


        $formEntreprise->add('lastname', TextType::class, [
            'attr' => [
                'id' => 'inputLastname',
                'aria-describedby' => 'lastname',
                'placeholder' => 'Nom',
                'class' => 'form-control',
            ]]);
        $formEntreprise->add('firstname', 	TextType::class, [
            'attr' => [
                'id' => 'inputFirstname',
                'aria-describedby' => 'firstname',
                'placeholder' => 'Prénom',
                'class' => 'form-control',
            ]]);
        $formEntreprise->add('email', 		EmailType::class, [
            'attr' => [
                'id' => 'inputEmail',
                'aria-describedby' => 'email',
                'placeholder' => 'adresse@mail.com',
                'class' => 'form-control',
            ]]);
        $formEntreprise->add('address', 		TextType::class, [
            'attr' => [
                'id' => 'inputEmail',
                'aria-describedby' => 'address',
                'placeholder' => 'Adresse *',
                'class' => 'form-control',
            ]]);
        $formEntreprise->add('company', 	TextType::class, [
            'attr' => [
                'id' => 'inputCompany',
                'aria-describedby' => 'company',
                'placeholder' => 'Société',
                'class' => 'form-control',
            ]]);
        $formEntreprise->add('tva', 	TextType::class, [
            'attr' => [
                'id' => 'inputTva',
                'aria-describedby' => 'tva',
                'placeholder' => 'TVA',
                'class' => 'form-control',
            ]]);
        $formEntreprise->add('city', 	TextType::class, [
            'attr' => [
                'id' => 'inputCity',
                'aria-describedby' => 'city',
                'placeholder' => 'Ville *',
                'class' => 'form-control',
            ]]);;
        $formEntreprise->add('zip', 	TextType::class, [
            'attr' => [
                'id' => 'inputZip',
                'aria-describedby' => 'zip',
                'placeholder' => 'Code Postal *',
                'class' => 'form-control',
            ]]);
        $formEntreprise->add('country', 	TextType::class, [
            'attr' => [
                'id' => 'inputCountry',
                'aria-describedby' => 'country',
                'placeholder' => 'Pays',
                'class' => 'form-control',
            ]]);;
        $formEntreprise->add('phone', 	TextType::class, [
            'attr' => [
                'id' => 'inputPhone',
                'aria-describedby' => 'phone',
                'placeholder' => 'Téléphone',
                'class' => 'form-control',
            ]]);
        $formEntreprise->add('password', 	TextType::class, [
            'attr' => [
                'id' => 'inputPassword',
                'aria-describedby' => 'password',
                'placeholder' => '*******',
                'class' => 'form-control',
            ]]);
        $formEntreprise->add('save',		SubmitType::class, [
            'attr' => [
                'label_format' => 'Valider',
                'id' => 'submit',
                'class' => 'btn btn-primary btn-block',
            ]]);
        $formEntreprise->getForm();

        $formEntreprise->handleRequest($request);

        if($formEntreprise->isSubmitted() && $formEntreprise->isValid()) {

            $newEntreprise = $formEntreprise->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($newEntreprise);
            $em->flush();

            return $this->redirectToRoute('registration');
        }

        return $this->render('registration.html.twig', [
            'addNewEntreprise' => $formEntreprise->createView(),
        ]);
    }

}