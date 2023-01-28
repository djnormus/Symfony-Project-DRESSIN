<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Color;
use App\Entity\Product;
use App\Entity\Size;
use App\Entity\Suppliers;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        ////////////// AJOUT PRODUIT //////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////
        if ($options['add'] == true) :

            $builder
                ->add('title', TextType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisir le nom du produit'
                    ]

                ])
                ->add('reference', TextType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisir la référence du produit'
                    ]

                ])
                ->add('description', TextareaType::class, [
                    'required' => false,
                    'label' => false,

                ])
                ->add('price', NumberType::class, [
                    'required' => false,
                    'label' => false,
                    'invalid_message' => 'Le type est incorrect', // Remplace le message en Anglais
                    'attr' => [
                        'placeholder' => 'Saisir le prix du produit'
                    ]
                ])
                ->add('picture', FileType::class, [
                    'required' => false,
                    'label' => false,
                    'constraints' => [
                        new File([
                            'mimeTypes' => [
                                "image/png",
                                "image/jpg",
                                "image/jpeg"
                            ],
                            'mimeTypesMessage' => 'Extension autorisées: PNG, JPG, JPEG'
                        ])
                    ]
                ])
                ->add('brand', TextType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisir la marque du produit'
                    ]

                ])
                ->add('gender', ChoiceType::class, [
                    'required' => false,
                    'label' => false,
                    'placeholder' => 'Choisissez une option',
                    'choices' => [
                        'Homme' => 'Homme',
                        'Femme' => 'Femme',
                        'Enfant' => 'Enfant'
                    ]
                ])
                ->add('category', EntityType::class, [
                    'required' => false,
                    'label' => false,
                    'class' => Category::class,
                    'choice_label' => 'title',
                    'placeholder' => 'Choisissez une option'
                ])

                ->add('suppliers', EntityType::class, [
                    'required' => false,
                    'label' => false,
                    'class' => Suppliers::class,
                    'choice_label' => 'title',
                    'placeholder' => 'Choisissez un fournisseur'
                ])
                ->add('colors', EntityType::class, [
                    'required' => false,
                    'label' => false,
                    'class' => Color::class,
                    'choice_label' => 'title',
                    'multiple' => true,
                    'attr' => [
                        'class' => "select2",
                        'data-placeholder' => "Sellectionnez une ou plusieurs couleurs"
                    ]

                ])

                ->add('sizes', EntityType::class, [
                    'required' => false,
                    'label' => false,
                    'class' => Size::class,
                    'choice_label' => 'title',
                    'multiple' => true,
                    'attr' => [
                        'class' => "select2",
                        'data-placeholder' => "Sellectionnez une ou plusieurs tailles"
                    ]
                ])

                ->add('Enregistrer', SubmitType::class);

        ////////////// EDITION PRODUIT //////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////
        elseif ($options['edit'] == true) :

            $builder
                ->add('title', TextType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisir le nom du produit'
                    ]

                ])
                ->add('reference', TextType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisir la référence du produit'
                    ]

                ])
                ->add('description', TextareaType::class, [
                    'required' => false,
                    'label' => false,

                ])
                ->add('price', NumberType::class, [
                    'required' => false,
                    'label' => false,
                    'invalid_message' => 'Le type est incorrect', // Remplace le message en Anglais
                    'attr' => [
                        'placeholder' => 'Saisir le prix du produit'
                    ]
                ])
                ->add('editPicture', FileType::class, [
                    'required' => false,
                    'label' => false,
                    'constraints' => [
                        new File([
                            'mimeTypes' => [
                                "image/png",
                                "image/jpg",
                                "image/jpeg"
                            ],
                            'mimeTypesMessage' => 'Extension autorisées: PNG, JPG, JPEG'
                        ])
                    ]
                ])
                ->add('brand', TextType::class, [
                    'required' => false,
                    'label' => false,
                    'attr' => [
                        'placeholder' => 'Saisir la marque du produit'
                    ]

                ])
                ->add('gender', ChoiceType::class, [
                    'required' => false,
                    'label' => false,
                    'placeholder' => 'Choisissez une option',
                    'choices' => [
                        'Homme' => 'Homme',
                        'Femme' => 'Femme',
                        'Enfant' => 'Enfant'
                    ]
                ])
                ->add('category', EntityType::class, [
                    'required' => false,
                    'label' => false,
                    'class' => Category::class,
                    'choice_label' => 'title',
                ])
                ->add('suppliers', EntityType::class, [
                    'required' => false,
                    'label' => false,
                    'class' => Suppliers::class,
                    'choice_label' => 'title',
                    'placeholder' => 'Choisissez un fournisseur'
                ])
                ->add('colors', EntityType::class, [
                    'required' => false,
                    'label' => false,
                    'class' => Color::class,
                    'choice_label' => 'title',
                    'multiple' => true,
                    'attr' => [
                        'class' => "select2",
                        'data-placeholder' => "Sellectionnez une ou plusieurs couleurs"
                    ]

                ])

                ->add('sizes', EntityType::class, [
                    'required' => false,
                    'label' => false,
                    'class' => Size::class,
                    'choice_label' => 'title',
                    'multiple' => true,
                    'attr' => [
                        'class' => "select2",
                        'data-placeholder' => "Sellectionnez une ou plusieurs tailles"
                    ]
                ])

                ->add('Enregistrer', SubmitType::class);



        endif;
    }




    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
            'add' => false,
            'edit' => false


        ]);
    }
}
