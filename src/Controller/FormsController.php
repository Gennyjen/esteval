<?php


namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\User\UserInterface;


class FormsController extends Controller {

    /**
     * @Route("/registration", name="registration")
     * @param Request $request
     * @param ValidatorInterface $validator
     * @return Response
     **/
    public function formAddNewUser(Request $request, ValidatorInterface $validator) {

        $user = new User();

        $form = $this->createForm(UserType::class, $user);

        $validator = $this->get('validator');

        if ($request->getMethod() == 'POST') {

            $form->handleRequest($request);

            $listErrors = $validator->validate($form);

             if ($form->isSubmitted() && $form->isValid()) {

                 $user->setDateCreated(new \DateTime());
                 $user->setRoles(['ROLE_USER']);
                 $user->setIsActive(true);
                 $pwd=$user->getPassword();
                 $encoder=$this->container->get('security.password_encoder');
                 $pwd=$encoder->encodePassword($user, $pwd);
                 $user->setPassword($pwd);

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

}



