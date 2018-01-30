<?php

namespace App\Controller;

use App\Entity\ComptesUtilisateurs;
use App\Form\ComptesUtilisateursType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class FormController extends Controller {

    /**
     * @Route("/registration", name="registration")
     * @param Request $request
     * @param ValidatorInterface $validator
     * @return Response
     */
    public function formsAddNewParticulier(Request $request, ValidatorInterface $validator) {

        $user = new ComptesUtilisateurs();

        $form = $this->createForm(ComptesUtilisateursType::class, $user);

        $validator = $this->get('validator');

        if ($request->getMethod() == 'POST') {

            $form->handleRequest($request);

            $listErrors = $validator->validate($form);

             if (($form->isSubmitted()) &&
                ($form->isValid()) &&
                (count($listErrors) < 0)) {

                     $em = $this->getDoctrine()->getManager();
                     $em->persist($user);
                     $em->flush();

                    return new Response('Les données ont bien été sauvegardées!');

                } else {

                    return new Response((string)$listErrors);

                 }

            }
        return $this->render('registration.html.twig', array('form' => $form->createView()));

        }
    }



