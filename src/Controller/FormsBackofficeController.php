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
     * @return Response
     */
    public function newUser(Request $request)
    {

        $user = new UserBackoffice();

        $form = $this->createForm(UserBackofficeType::class, $user);

        $form->handleRequest($request);

        if ($request->getMethod($request) == 'POST') {

            if ($form->isSubmitted()
                && $form->isValid()) {

                $user->setFonction('fonction');
                $user->setFirstname('firstname');
                $user->setLastname('lastname');
                $user->setEmail('email');
                $user->setPassword('password');


                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                return $this->redirectToRoute('dashboard');

            } else {

                return $this->render('backoffice/registration.html.twig', array('form' => $form->createView()));
            }
        }
    }

    /**
     * @Route("/backoffice/login", name="loginB")
     * @param Request $request
     * @return Response
     */
    public function connectUser(Request $request) {

        $user = new UserBackoffice();

        $form = $this->createForm(UserBackofficeType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $user->getFonction($fonction);
            $user->getFirstname();
            $user->getLastname();
            $user->getEmail();
            $user->getPassword();

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('dashboard');

        } else {

            return $this->render('backoffice/login.html.twig', array('form' => $form->createView()));
        }

    }

}