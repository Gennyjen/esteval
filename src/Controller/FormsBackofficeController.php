<?php

    namespace App\Controller;

    use App\Entity\UserBackoffice;
    use App\Form\UserBackofficeType;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Validator\Validator\ValidatorInterface;


class FormsBackofficeController extends Controller {

    /**
     * @Route("/backoffice/registration", name="registrationB")
     * @param Request $request
     * @param ValidatorInterface $validator
     * @return Response
     */
    public function formAddNewUser(Request $request, ValidatorInterface $validator) {

        $form = $this->createForm(UserBackofficeType::class);

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
        return $this->render('backoffice/registration.html.twig', array('form' => $form->createView()));

    }

    /**
     * @Route("/backoffice/login", name="loginB")
     * @param Request $request
     * @param ValidatorInterface $validator
     * @return Response
     */
    public function formConnectUser(Request $request, ValidatorInterface $validator) {

        $user = new User();

        $form = $this->createForm(UserBackofficeType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $userSave=$form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($userSave);
            $em->flush();

            return $this->redirectToRoute('dashboard');

        }

            return $this->render('backoffice/login.html.twig', array('form' => $form->createView()));

    }
}