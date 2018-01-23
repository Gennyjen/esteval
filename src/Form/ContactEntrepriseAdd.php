<?php

namespace App\Form;

use App\Entity\ContactEntreprise;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactEntrepriseAdd extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('lastname', TextType::class, [
                'attr' => [
                    'id' => 'inputLastname',
                    'aria-describedby' => 'lastname',
                    'placeholder' => 'Nom',
                    'class' => 'form-control',
            ]]);
        $builder->add('firstname', 	TextType::class, [
                'attr' => [
                    'id' => 'inputFirstname',
                    'aria-describedby' => 'firstname',
                    'placeholder' => 'Prénom',
                    'class' => 'form-control',
            ]]);
        $builder->add('email', 		EmailType::class, [
                'attr' => [
                    'id' => 'inputEmail',
                    'aria-describedby' => 'email',
                    'placeholder' => 'adresse@mail.com',
                    'class' => 'form-control',
            ]]);
        $builder->add('address', 		TextType::class, [
                'attr' => [
                    'id' => 'inputEmail',
                    'aria-describedby' => 'address',
                    'placeholder' => 'Adresse *',
                    'class' => 'form-control',
            ]]);
        $builder->add('company', 	TextType::class, [
                'attr' => [
                    'id' => 'inputCompany',
                    'aria-describedby' => 'company',
                    'placeholder' => 'Société',
                    'class' => 'form-control',
            ]]);
        $builder->add('tva', 	TextType::class, [
                'attr' => [
                    'id' => 'inputTva',
                    'aria-describedby' => 'tva',
                    'placeholder' => 'TVA',
                    'class' => 'form-control',
            ]]);
        $builder->add('city', 	TextType::class, [
                'attr' => [
                    'id' => 'inputCity',
                    'aria-describedby' => 'city',
                    'placeholder' => 'Ville *',
                    'class' => 'form-control',
            ]]);;
        $builder->add('zip', 	TextType::class, [
                'attr' => [
                    'id' => 'inputZip',
                    'aria-describedby' => 'zip',
                    'placeholder' => 'Code Postal *',
                    'class' => 'form-control',
            ]]);
        $builder->add('phone', 	TextType::class, [
                'attr' => [
                    'id' => 'inputPhone',
                    'aria-describedby' => 'phone',
                    'placeholder' => 'Téléphone',
                    'class' => 'form-control',
            ]]);
        $builder->add('password', 	TextType::class, [
            'attr' => [
                'id' => 'inputPassword',
                'aria-describedby' => 'password',
                'placeholder' => '*******',
                'class' => 'form-control',
            ]]);
        $builder->add('save',		SubmitType::class, [
                'attr' => [
                    'label_format' => 'Valider',
                    'id' => 'submit',
                    'class' => 'btn btn-primary btn-block',
            ]]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ContactEntreprise::class,
        ]);
    }
}