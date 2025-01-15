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
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Constraints\IsTrue;
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
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[A-Z0-9]{8}$/',
                        'message' => 'INVALID_INVITATION_CODE_KEY'
                    ])
                ]
            ])
            ->add('fullName', TextType::class, [
                'mapped' => false,
                'required' => true,
                'label' => 'Nom complet',
                'attr' => [
                    'class' => 'border-0 bg-light rounded-end ps-1',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'REQUIRED_FIELD_KEY'
                    ])
                ]
            ])
            ->add('username', TextType::class, [
                'mapped' => true,
                'required' => true,
                'label' => 'Nom d\'utilisateur',
                'attr' => [
                    'class' => 'border-0 bg-light rounded-end ps-1',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'REQUIRED_FIELD_KEY'
                    ]),
                    new Regex([
                        'pattern' => '/^[a-zA-Z0-9_]+$/',
                        'message' => 'INVALID_USERNAME_KEY'
                    ]),
                    new Callback([
                        'callback' => [$this, 'validateUniqueUsername'],
                        'message' => 'USERNAME_EXISTS_KEY'
                    ])
                ]
            ])
            ->add('phoneNumber', TextType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'border-0 bg-light rounded-end ps-1',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'REQUIRED_FIELD_KEY'
                    ]),
                    new Regex([
                        'pattern' => '/^\+?[0-9]{8,15}$/',
                        'message' => 'INVALID_PHONE_KEY'
                    ]),
                    new Callback([
                        'callback' => [$this, 'validateUniquePhone'],
                        'message' => 'PHONE_EXISTS_KEY'
                    ])
                ]
            ])
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'attr' => [
                    'autocomplete' => 'new-password',
                    'class' => 'border-0 bg-light rounded-end ps-1'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'REQUIRED_FIELD_KEY'
                    ]),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'MIN_8_CHARS_KEY'
                    ]),
                    new Regex([
                        'pattern' => '/[A-Z]/',
                        'message' => 'UPPERCASE_REQUIRED_KEY'
                    ]),
                    new Regex([
                        'pattern' => '/[a-z]/',
                        'message' => 'LOWERCASE_REQUIRED_KEY'
                    ]),
                    new Regex([
                        'pattern' => '/[0-9]/',
                        'message' => 'NUMBER_REQUIRED_KEY'
                    ])
                ]
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'TERMS_REQUIRED_KEY'
                    ])
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
