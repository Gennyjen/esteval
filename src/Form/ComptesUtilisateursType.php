<?php

namespace App\Form;

use App\Entity\ComptesUtilisateurs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ComptesUtilisateursType extends AbstractType
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
                        'aria-describedby' => 'lastname',
                        'placeholder' => 'Nom',
                        'class' => 'form-control ',
                        'required' => true,
                        ]])
                ->add('firstname', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputFirstname',
                        'aria-describedby' => 'firstname',
                        'placeholder' => 'Prénom',
                        'class' => 'form-control ',
                        'required' => true,
                    ]])
                ->add('email', 		EmailType::class, [
                    'attr' => [
                        'id' => 'inputEmail',
                        'aria-describedby' => 'email',
                        'placeholder' => 'adresse@mail.com',
                        'class' => 'form-control',
                        'required' => true,
                    ]])
                ->add('address', 		TextType::class, [
                    'attr' => [
                        'id' => 'inpuAddress',
                        'aria-describedby' => 'address',
                        'placeholder' => 'Adresse *',
                        'class' => 'form-control',
                        'required' => true,
                    ]])
                ->add('city', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputCity',
                        'aria-describedby' => 'city',
                        'placeholder' => 'Ville *',
                        'class' => 'form-control ',
                        'required' => true,
                    ]])
                ->add('country', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputCountry',
                        'aria-describedby' => 'country',
                        'placeholder' => 'Pays',
                        'class' => 'form-control ',
                        'required' => true,

                    ]])
                ->add('zip', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputZip',
                        'aria-describedby' => 'zip',
                        'placeholder' => 'Code Postal *',
                        'class' => 'form-control ',
                        'required' => true,

                    ]])
                ->add('phone', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputPhone',
                        'aria-describedby' => 'phone',
                        'placeholder' => 'Téléphone',
                        'class' => 'form-control ',
                        'required' => true,

                    ]])
                ->add('password', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputPassword',
                        'aria-describedby' => 'password',
                        'placeholder' => '*******',
                        'class' => 'form-control',
                        'required' => true,

                    ]])
                ->add('save',		SubmitType::class, [
                    'attr' => [
                        'id' => 'submit',
                        'class' => 'btn btn-primary btn-block',
                    ]])
                ->add('company', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputCompany',
                        'aria-describedby' => 'company',
                        'placeholder' => 'Société',
                        'class' => 'form-control invisible',
                        'required' => true,
                    ]])
                ->add('tva', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputTva',
                        'aria-describedby' => 'tva',
                        'placeholder' => 'TVA',
                        'class' => 'form-control invisible',
                        'required' => true,
                    ]])
                ->add('fonction', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputFonction',
                        'aria-describedby' => 'fonction',
                        'placeholder' => 'TVA',
                        'class' => 'form-control invisible',
                        'required' => true,
                    ]])
                ->getForm();
        }

    public function configureOptions(OptionsResolver $resolver)
    {
        /**
         * @param OptionsResolver $resolver
         */
        $resolver->setDefaults([
            'data_class' => 'App\Entity\ComptesUtilisateurs',
        ]);
    }
}