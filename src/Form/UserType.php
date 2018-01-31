<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserType extends AbstractType
{
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
                        'required' => true,
                        ]])
                ->add('firstname', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputFirstname',
                        'placeholder' => 'Prénom',
                        'class' => 'form-control ',
                        'required' => true,
                    ]])
                ->add('email', 		EmailType::class, [
                    'attr' => [
                        'id' => 'inputEmail',
                        'placeholder' => 'adresse@mail.com',
                        'class' => 'form-control',
                        'required' => true,
                    ]])
                ->add('address', 		TextType::class, [
                    'attr' => [
                        'id' => 'inpuAddress',
                        'placeholder' => 'Adresse *',
                        'class' => 'form-control',
                        'required' => true,
                    ]])
                ->add('city', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputCity',
                        'placeholder' => 'Ville *',
                        'class' => 'form-control ',
                        'required' => true,
                    ]])
                ->add('country', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputCountry',
                        'placeholder' => 'Pays',
                        'class' => 'form-control ',
                        'required' => true,

                    ]])
                ->add('zip', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputZip',
                        'placeholder' => 'Code Postal *',
                        'class' => 'form-control ',
                        'required' => true,

                    ]])
                ->add('phone', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputPhone',
                        'placeholder' => 'Téléphone',
                        'class' => 'form-control ',
                        'required' => true,

                    ]])
                ->add('password', 	PasswordType::class, [
                    'attr' => [
                        'id' => 'inputPassword',
                        'placeholder' => '*******',
                        'class' => 'form-control',
                        'required' => true,

                        ]])
                ->add('company', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputCompany',
                        'placeholder' => 'Société',
                        'class' => 'form-control',
                    ]])
                ->add('tva', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputTva',
                        'placeholder' => 'TVA',
                        'class' => 'form-control',
                    ]])
                ->add('fonction', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputFonction',
                        'placeholder' => 'TVA',
                        'class' => 'form-control',
                    ]])

                ->add('isCompany', 	ChoiceType::class, [
                    'choices' => [
                        'particulier' => true,
                        'entreprise' => false,
                    ],
                    'expanded' => true,
                    'attr' => [
                        'id' => 'ongletEntreprise',
                        'class' => 'form-control',
                    ]])
                ->add('chooseNewsletter', 	CheckboxType::class, [
                    'attr' => [
                        'class' => 'form-check-input',
                        'id' => 'newsletter',
                    ]])
                ->add('save',		SubmitType::class, [
                    'attr' => [
                        'id' => 'submit',
                        'class' => 'btn btn-primary btn-block',
                    ]])
                ->getForm();
        }

    public function configureOptions(OptionsResolver $resolver)
    {
        /**
         * @param OptionsResolver $resolver
         */
        $resolver->setDefaults([
            'data_class' => 'App\Entity\User',
        ]);
    }
}