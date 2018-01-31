<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class FormsController extends Controller {

    /**
     * @Route("/registration", name="registration")
     * @param Request $request
     * @param ValidatorInterface $validator
     * @return Response
     */
    public function formAddNewUser(Request $request, ValidatorInterface $validator) {

        $user = new User();

        $form = $this->createForm(UserType::class, $user);

        $validator = $this->get('validator');

        if ($request->getMethod() == 'POST') {

            $form->handleRequest($request);

            $listErrors = $validator->validate($form);

             if ($form->isSubmitted() && $form->isValid()) {

                 $userSave=$form->getData();
                 $em = $this->getDoctrine()->getManager();
                 $em->persist($userSave);
                 $em->flush();

                    return new Response('Les données ont bien été sauvegardées!');

             } else {

                  return new Response((string)$listErrors);

             }

        }
        return $this->render('registration.html.twig', array('form' => $form->createView()));

        }

    /**
     * @Route("/login", name="login")
     * @param Request $request
     * @param ValidatorInterface $validator
     * @return Response
     */
    public function formConnectUser(Request $request, ValidatorInterface $validator) {

        $user = new User();

        $form = $this->createForm(UserType::class, $user);

        $validator = $this->get('validator');

        if ($request->getMethod() == 'POST') {

            $form->handleRequest($request);

            $listErrors = $validator->validate($form);

            if ($form->isSubmitted() && $form->isValid()) {

                $userSave=$form->getData();
                $em = $this->getDoctrine()->getManager();
                $em->persist($userSave);
                $em->flush();

                return new Response('Les données ont bien été sauvegardées!');

            } else {

                return new Response((string)$listErrors);

            }

        }
        return $this->render('login.html.twig', array('form' => $form->createView()));

    }

}



