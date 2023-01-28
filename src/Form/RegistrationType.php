<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        if ($options['add'] == true) {
            $builder
                ->add('firstName', TextType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisissez votre Prénom'
                    ],
                    'constraints' => new Length([
                        'min' => 3,
                        'max' => 30
                    ])
                ])
                ->add('lastName', TextType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisissez votre Nom'
                    ],
                    'constraints' => new Length([
                        'min' => 3,
                        'max' => 30
                    ])
                ])
                ->add('email', EmailType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisissez votre e-mail'
                    ],
                    'constraints' => new Length([
                        'min' => 3,
                        'max' => 100
                    ])
                ])
                ->add('password', PasswordType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisissez votre mot de passe'
                    ],
                    'constraints' => new Length([
                        'min' => 3,
                        'max' => 30
                    ])
                ])
                ->add('confirmPassword', PasswordType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Confirmez votre mot de passe'
                    ]
                ])
                ->add('streetNumber', NumberType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisissez le numéro de la voie'
                    ],
                    'constraints' => new Length([
                        'min' => 1,
                        'max' => 6
                    ])
                ])
                ->add('street', TextType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisissez le nom de la voie'
                    ],
                    'constraints' => new Length([
                        'min' => 3,
                        'max' => 100
                    ])
                ])
                ->add('zipCode', NumberType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisissez votre code postal'
                    ],
                    'constraints' => new Length([
                        'min' => 3,
                        'max' => 6
                    ])
                ])
                ->add('city', TextType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisissez votre ville'
                    ],
                    'constraints' => new Length([
                        'min' => 3,
                        'max' => 30
                    ])
                ])
                ->add('phone', NumberType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisissez votre numéro de téléphone'
                    ],
                    'constraints' => new Length([
                        'min' => 3,
                        'max' => 30
                    ])
                ])
                ->add('username', TextType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Choisissez un pseudo'
                    ],
                    'constraints' => new Length([
                        'min' => 3,
                        'max' => 30
                    ])
                ])

                ->add('Enregistrer', SubmitType::class);

            ////////////// MODIF PROFILE USER /////////////////////////////
            //////////////////////////////////////////////////////////////
        } elseif ($options['edit'] == true) {
            $builder
                ->add('firstName', TextType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisissez votre Prénom'
                    ],
                    'constraints' => new Length([
                        'min' => 3,
                        'max' => 30
                    ])
                ])
                ->add('lastName', TextType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisissez votre Nom'
                    ],
                    'constraints' => new Length([
                        'min' => 3,
                        'max' => 30
                    ])
                ])
                ->add('email', EmailType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisissez votre e-mail'
                    ],
                    'constraints' => new Length([
                        'min' => 3,
                        'max' => 100
                    ])
                ])
                
                ->add('streetNumber', NumberType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisissez le numéro de la voie'
                    ],
                    'constraints' => new Length([
                        'min' => 1,
                        'max' => 6
                    ])
                ])
                ->add('street', TextType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisissez le nom de la voie'
                    ],
                    'constraints' => new Length([
                        'min' => 3,
                        'max' => 100
                    ])
                ])
                ->add('zipCode', NumberType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisissez votre code postal'
                    ],
                    'constraints' => new Length([
                        'min' => 3,
                        'max' => 6
                    ])
                ])
                ->add('city', TextType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisissez votre ville'
                    ],
                    'constraints' => new Length([
                        'min' => 3,
                        'max' => 30
                    ])
                ])
                ->add('phone', NumberType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisissez votre numéro de téléphone'
                    ],
                    'constraints' => new Length([
                        'min' => 3,
                        'max' => 30
                    ])
                ])
                ->add('username', TextType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Choisissez un pseudo'
                    ],
                    'constraints' => new Length([
                        'min' => 3,
                        'max' => 30
                    ])
                ])

                ->add('Enregistrer', SubmitType::class, [
                    'label' => 'Mettre à jour',
                    'attr' => [
                        'class' => 'btn btn-primary rounded'
                    ]
                ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        
        ]);
    }
}
