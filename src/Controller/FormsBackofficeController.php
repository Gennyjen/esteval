<?php

    namespace App\Controller;

    use App\Entity\UserBackoffice;
    use App\Form\UserBackofficeType;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Validator\Validator\ValidatorInterface;


class FormsBackofficeController extends Controller
{

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

                $userSave=$form->getData();
                $em = $this->getDoctrine()->getManager();
                $em->persist($userSave);
                $em->flush();

                return $this->redirectToRoute('dashboard');

            } else {

                return $this->render('backoffice/registration.html.twig', array('form' => $form->createView()));
            }
        }
    }

    /**
     * @Route("/backoffice/login", name="loginB")
     */
    public function connectUser(Request $request)
    {

        $form = $this->createForm(UserBackofficeType::class);

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