<?php

namespace App\Form;

use App\Controller\FormsBackofficeController;
use App\Entity\UserBackoffice;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserBackofficeType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastname', TextType::class, [
                'attr' => [
                    'id' => 'inputLastname',
                    'placeholder' => 'Nom',
                    'class' => 'form-control ',
                    'name' => 'lastname',
                    'required' => true,
                ]])
            ->add('firstname', TextType::class, [
                'attr' => [
                    'id' => 'inputFirstname',
                    'placeholder' => 'Prénom',
                    'class' => 'form-control ',
                    'name' => 'firstname',
                    'required' => true,
                ]])
            ->add('email', EmailType::class, [
                'attr' => [
                    'id' => 'inputEmail',
                    'placeholder' => 'adresse@mail.com',
                    'class' => 'form-control',
                    'name' => 'email',
                    'required' => true,
                ]])
            ->add('password', PasswordType::class, [
                'attr' => [
                    'id' => 'inputPassword',
                    'placeholder' => '*******',
                    'class' => 'form-control',
                    'name' => 'password',
                    'required' => true,
                ]])
            ->add('fonction', TextType::class, [
                'attr' => [
                    'autofocus' => true,
                    'id' => 'inputFonction',
                    'placeholder' => 'Fonction',
                    'class' => 'form-control',
                    'name' => 'fonction',
                ]])
            ->add('registration', SubmitType::class, [
                'attr' => [
                    'id' => 'submit',
                    'class' => 'btn btn-lg btn-success btn-block',
                ]])
            ->add('save', SubmitType::class, [
                'attr' => [
                    'id' => 'submit',
                    'class' => 'btn btn-lg btn-success btn-block',
                ]])
            ->getForm();

            }

        public function configureOptions(OptionsResolver $resolver) {
            /**
             * @param OptionsResolver $resolver
             */
            $resolver->setDefaults([
                'data_class' => 'App\Entity\UserBackoffice',
            ]);
        }
    }
