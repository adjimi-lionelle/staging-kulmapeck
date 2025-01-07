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
                'mapped' => false,
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
                'attr' => [
                    'class' => 'border-0 bg-light rounded-end ps-1',
                    'placeholder' => 'Phone Number'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your phone number',
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
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        'max' => 4096,
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
