<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\User;
use App\Validator\InvitationCode;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class RegistrationTeacherType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'border-0 bg-light rounded-end ps-1', 
                    'id' => 'last_name'
                ], 
                'label' => 'Email adress'
            ])
            ->add('parentCode', TextType::class, [
                'label' => "Invitation Code",
                'required' => false,
                'constraints' => [
                    new InvitationCode()
                ],
                'attr' => [
                    'class' => 'border-0 bg-light rounded-end ps-1',
                    'placeholder' => "Insérer le code d'invitation ici si vous en avez un"
                ], 
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
                'label_html' => true,
                'label' => "By signing up, you agree to the <a href=''>terms</a>"
            ])
            ->add('username', TextType::class, [
                'mapped' => true,
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'REQUIRED_FIELD_KEY'
                    ]),
                    new Length([
                        'min' => 5,
                        'max' => 8,
                        'minMessage' => 'USERNAME_TOO_SHORT_KEY',
                        'maxMessage' => 'USERNAME_TOO_LONG_KEY'
                    ]),
                    new Regex([
                        'pattern' => '/^[a-zA-Z0-9_]+$/',
                        'message' => 'INVALID_USERNAME_KEY'
                    ]),
                    new Callback([$this, 'validateUniqueUsername'])
                ]
            ])
            ->add('plainPassword', RepeatedType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'options' => ['attr' => ['class' => 'border-0 bg-light rounded-end ps-1', 'autocomplete' => 'new-password']],
                'required' => true,
                'first_options'  => ['label' => 'Password'],
                'second_options' => ['label' => 'Repeat Password'],
                
            ])
            ->add("personne", PersonneType::class)
            ->add('enseignant', EnseignantType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
