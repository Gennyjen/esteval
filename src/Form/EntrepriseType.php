<?php

namespace App\Form;

use App\Entity\Particulier;
use App\Entity\Entreprise;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EntrepriseType extends AbstractType

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
                        'class' => 'form-control invisible',
                ]])
            ->add('firstname', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputFirstname',
                        'aria-describedby' => 'firstname',
                        'placeholder' => 'Prénom',
                        'class' => 'form-control invisible',
                ]])
            ->add('email', 		EmailType::class, [
                    'attr' => [
                        'id' => 'inputEmail',
                        'aria-describedby' => 'email',
                        'placeholder' => 'adresse@mail.com',
                        'class' => 'form-control invisible',
                ]])
            ->add('address', 		TextType::class, [
                    'attr' => [
                        'id' => 'inputEmail',
                        'aria-describedby' => 'address',
                        'placeholder' => 'Adresse *',
                        'class' => 'form-control invisible',
                ]])
            ->add('company', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputCompany',
                        'aria-describedby' => 'company',
                        'placeholder' => 'Société',
                        'class' => 'form-control invisible',
                ]])
            ->add('tva', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputTva',
                        'aria-describedby' => 'tva',
                        'placeholder' => 'TVA',
                        'class' => 'form-control invisible',
                ]])
            ->add('city', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputCity',
                        'aria-describedby' => 'city',
                        'placeholder' => 'Ville *',
                        'class' => 'form-control invisible',
                ]])
            ->add('zip', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputZip',
                        'aria-describedby' => 'zip',
                        'placeholder' => 'Code Postal *',
                        'class' => 'form-control invisible',
                ]])
            ->add('country', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputCountry',
                        'aria-describedby' => 'country',
                        'placeholder' => 'Pays',
                        'class' => 'form-control invisible',
                ]])
            ->add('phone', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputPhone',
                        'aria-describedby' => 'phone',
                        'placeholder' => 'Téléphone',
                        'class' => 'form-control invisible',
                ]])
            ->add('password', 	TextType::class, [
                    'attr' => [
                        'id' => 'inputPassword',
                        'aria-describedby' => 'password',
                        'placeholder' => '*******',
                        'class' => 'form-control invisible',
                ]])
            ->add('save',		SubmitType::class, [
                    'attr' => [
                            'label_format' => 'Valider',
                            'id' => 'submit',
                            'class' => 'btn btn-primary btn-block invisible',
                    ]])
            ->getForm();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        /**
         * @param OptionsResolver $resolver
         */
        $resolver->setDefaults([
            'data_class' => 'App\Entity\Entreprise'
        ]);
    }

}