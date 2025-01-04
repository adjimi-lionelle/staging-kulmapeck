<?php

namespace App\Form;

use App\Entity\ContactMessage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class ContactMessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'name',
                TextType::class,
                [
                    'attr' => [
                        'class' => 'form-control border-0 py-3',
                        'placeholder' => 'Your Name'
                    ],
                    'required' => true,
                ]
            )
            ->add('project', TextType::class, [
                'attr' => [
                    'class' => 'form-control border-0 py-3',
                    'placeholder' => 'Project'
                ],
                'required' => true
            ])
            ->add('message', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control border-0 py-3',
                    'placeholder' => 'Message'
                ],
                'required' => true
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'form-control border-0 py-3',
                    'placeholder' => 'Your Email'
                ],
                'required' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ContactMessage::class,
        ]);
    }
}
