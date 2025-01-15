<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class SimpleRegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('parentCode', TextType::class, [
                'mapped' => false,
                'required' => false,
                'label' => 'Code d\'invitation',
                'attr' => [
                    'placeholder' => 'Code d\'invitation'
                ]
            ])
            ->add('fullName', TextType::class, [
                'mapped' => false,
                'required' => true,
                'label' => 'Nom complet',
                'attr' => [
                    'placeholder' => 'Votre nom complet'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre nom complet',
                    ]),
                ],
            ])
            ->add('username', TextType::class, [
                'mapped' => true,
                'required' => true,
                'label' => 'Nom d\'utilisateur',
                'attr' => [
                    'placeholder' => 'Votre nom d\'utilisateur'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un nom d\'utilisateur',
                    ]),
                    new Length([
                        'min' => 5,
                        'max' => 8,
                        'minMessage' => 'Le nom d\'utilisateur doit faire au moins {{ limit }} caractères',
                        'maxMessage' => 'Le nom d\'utilisateur ne peut pas dépasser {{ limit }} caractères',
                    ]),
                ],
            ])
            ->add('phoneNumber', TextType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'border-0 bg-light rounded-end ps-1',
                    'placeholder' => 'Numéro de téléphone'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre numéro de téléphone',
                    ]),
                    new Length([
                        'min' => 8,
                        'max' => 15,
                        'minMessage' => 'Le numéro de téléphone doit faire au moins {{ limit }} caractères',
                        'maxMessage' => 'Le numéro de téléphone ne peut pas dépasser {{ limit }} caractères',
                    ]),
                    new Regex([
                        'pattern' => '/^[0-9\+]+$/',
                        'message' => 'Le numéro de téléphone ne doit contenir que des chiffres et le signe +',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'attr' => [
                    'autocomplete' => 'new-password',
                    'class' => 'border-0 bg-light rounded-end ps-1'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un mot de passe',
                    ]),
                    new Length([
                        'min' => 16,
                        'minMessage' => 'Votre mot de passe doit contenir au moins {{ limit }} caractères',
                        'max' => 4096,
                    ]),
                    new Regex([
                        'pattern' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])(?=.*[^\w]).{16,}$/',
                        'message' => 'Votre mot de passe doit contenir au moins une lettre majuscule, une lettre minuscule, un chiffre, un caractère spécial et un caractère non-alphanumérique',
                    ]),
                ],
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
                'label_html' => true,
                'label' => 'By signing up, you agree to the <a href="">terms</a>'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
