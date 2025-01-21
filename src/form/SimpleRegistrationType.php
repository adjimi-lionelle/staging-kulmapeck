<?php

namespace App\Form;

use App\Entity\User;
use App\Validator\InvitationCode;
use Doctrine\ORM\EntityManagerInterface;
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
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class SimpleRegistrationType extends AbstractType
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('parentCode', TextType::class, [
                'mapped' => false,
                'required' => false,
                'label' => 'INVITATION_CODE_KEY',
                'translation_domain' => 'messages',
                'attr' => [
                    'placeholder' => 'INVITATION_CODE_PLACEHOLDER_KEY'
                ],
                'constraints' => [
                    new InvitationCode([
                        'message' => 'INVALID_INVITATION_CODE_KEY'
                    ])
                ]
            ])
            ->add('fullName', TextType::class, [
                'mapped' => false,
                'required' => true,
                'label' => 'FULL_NAME_KEY',
                'translation_domain' => 'messages',
                'attr' => [
                    'placeholder' => 'FULL_NAME_PLACEHOLDER_KEY'
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
                'label' => 'USERNAME_KEY',
                'translation_domain' => 'messages',
                'attr' => [
                    'placeholder' => 'USERNAME_PLACEHOLDER_KEY'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'REQUIRED_FIELD_KEY'
                    ]),
                    new Length([
                        'max' => 15,
                        'min' => 5,
                        'maxMessage' => 'USERNAME_TOO_LONG_KEY',
                        'minMessage' => 'USERNAME_LENGTH_ERROR_KEY'
                    ]),
                    new Regex([
                        'pattern' => '/^[a-zA-Z0-9_]+$/',
                        'message' => 'USERNAME_NO_SPACE_KEY'
                    ]),
                    new Callback([$this, 'validateUniqueUsername'])
                ]
            ])
            ->add('phoneNumber', TextType::class, [
                'mapped' => true,
                'required' => true,
                'label' => 'PHONE_NUMBER_KEY',
                'translation_domain' => 'messages',
                'attr' => [
                    'placeholder' => 'PHONE_PLACEHOLDER_KEY'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'REQUIRED_FIELD_KEY'
                    ]),
                    new Regex([
                        'pattern' => '/^\+?[0-9]+$/',
                        'message' => 'PHONE_NO_SPACE_KEY'
                    ]),
                    new Callback([$this, 'validateUniquePhone'])
                ]
            ])
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'required' => true,
                'label' => 'PASSWORD_KEY',
                'translation_domain' => 'messages',
                'attr' => [
                    'placeholder' => 'PASSWORD_PLACEHOLDER_KEY'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'REQUIRED_FIELD_KEY'
                    ]),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'PASSWORD_TOO_SHORT_KEY'
                    ])
                ]
            ])
            ->add('confirmPassword', PasswordType::class, [
                'mapped' => false,
                'required' => true,
                'label' => 'CONFIRM_PASSWORD_KEY',
                'translation_domain' => 'messages',
                'attr' => [
                    'placeholder' => 'CONFIRM_PASSWORD_PLACEHOLDER_KEY'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'REQUIRED_FIELD_KEY'
                    ]),
                    new Callback(function ($value, ExecutionContextInterface $context) {
                        $form = $context->getRoot();
                        $password = $form->get('plainPassword')->getData();
                        
                        if ($value !== $password) {
                            $context->buildViolation('PASSWORD_MISMATCH_KEY')
                                ->addViolation();
                        }
                    })
                ]
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'required' => true,
                'label' => 'AGREE_TO_TERMS_KEY',
                'translation_domain' => 'messages',
                'constraints' => [
                    new IsTrue([
                        'message' => 'TERMS_REQUIRED_KEY'
                    ])
                ]
            ])
        ;
    }

    public function validateUniqueUsername($value, ExecutionContextInterface $context)
    {
        $existingUser = $this->entityManager->getRepository(User::class)->findOneBy(['username' => $value]);
        
        if ($existingUser) {
            $context->buildViolation('USERNAME_EXISTS_KEY')
                   ->addViolation();
        }
    }

    public function validateUniquePhone($value, ExecutionContextInterface $context)
    {
        $existingUser = $this->entityManager->getRepository(User::class)->findOneBy(['phoneNumber' => $value]);
        
        if ($existingUser) {
            $context->buildViolation('PHONE_EXISTS_KEY')
                   ->addViolation();
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'registration_form',
            'translation_domain' => 'messages'
        ]);
    }
}