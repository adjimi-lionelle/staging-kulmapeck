<?php

namespace App\Form;

use App\Entity\Investisseur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;



class InvestisseurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder
            ->add('firstName', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required' => true,
                'invalid_message' => 'Erreur de Nom',

            ])
            ->add('lastName', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required' => true,
                'invalid_message' => 'Erreur de Prenom',

            ])
            ->add('ville', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required' => true,
                'invalid_message' => 'Erreur de Ville',

            ])
            ->add('phone', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required' => true,
                'invalid_message' => 'Erreur de Telephone',

            ])
            ->add('email', EmailType::class, [
                'attr' => ['class' => 'form-control'],
                'required' => true,
                'invalid_message' => 'Erreur de Mail',

            ])
            ->add('cniNumber', TextType::class, [
                'label' => 'Numero CNI/passeport',
                'required' => true,
                'attr' => ['class' => 'form-control'],

            ])
            ->add('dateExpiration', DateType::class, [
                'label' => 'Date emission CNI/passport',
                'required' => true,
                'widget' => 'single_text', // Render as a single text input
                'format' => 'yyyy-MM-dd', // Specify the desired date format
            ])
            ->add('address', TextareaType::class, [
                'attr' => ['class' => 'form-control'],
                'required' => true,
                'invalid_message' => 'Erreur de Adresse',


            ])
            ->add('companyName', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'label' => 'Votre Compagnie/entreprise',

            ])

            ->add('desiredInvestmentType', ChoiceType::class, [
                'choices' => [
                    'Acheter des parts' => 'part',
                    'Acheter des actions' => 'action',
                ],
                'expanded' => true,
                'multiple' => false,
                'label' => 'Je désire  Acheter:',
                'required' => true,
                'invalid_message' => 'Erreur de sélection de vos parts ou action',
                'data' => 'part',
                'choice_attr' => [
                    'Acheter des parts' => ['style' => 'margin-right: 10px;'],
                    'Acheter des actions' => ['style' => 'margin-left: 10px;']
                ],
                'choice_label' => function ($choice, $key, $value) {
                    // Provide descriptions for each choice
                    switch ($choice) {
                        case 'part':
                            return 'Parts (1 000 000 FCFA /part )';
                        case 'action':
                            return 'Actions - (10 000 FCFA /Action  et 10 au minimum)';
                        default:
                            return ''; // Handle any other cases
                    }
                }
            ])


            // Placeholder for the investmentAmount field, will be dynamically populated
            ->add('investmentAmount', NumberType::class, [
                'label' => 'Quantité souhaitée',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'inputmode' => 'numeric', // Set input mode to numeric
                    'pattern' => '[0-9]*', // Specify pattern to allow only numeric values
                ],
                'invalid_message' => 'Erreur de la quantité souhaitée',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Investisseur::class,
        ]);
    }

    private function generateDateChoices(): array
    {
        // Generate an array of date choices for the next 10 years, for example
        $choices = [];
        $currentYear = (int) date('Y');
        $endYear = $currentYear + 10;
        for ($year = $currentYear; $year <= $endYear; $year++) {
            for ($month = 1; $month <= 12; $month++) {
                $date = new \DateTime("$year-$month-01");
                $formattedDate = $date->format('Y-m-d'); // Adjust the date format if needed
                $choices[$formattedDate] = $formattedDate;
            }
        }

        return $choices;
    }
}
