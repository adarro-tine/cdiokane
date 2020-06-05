<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\SousCategorie;
use App\Entity\Universite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AddCoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('titreCours',TextType::class)       
        ->add('description',TextType::class)
        ->add('competence',TextareaType::class)
        ->add('exigence',TextType::class) 
        ->add('prix',NumberType::class)
        ->add('duree',TextType::class)
        ->add('etiquette',TextType::class)
        ->add('categorie',EntityType::class,[
            'class' => Categorie::class,
            'choice_label'=>'libelle'
        ])
        ->add('souscategorie',EntityType::class,[
            'class' => SousCategorie::class,
            'choice_label'=>'nom'
        ])
        // ->add('chapitres',EntityType::class,[
        //     'class' => Chapitre::class,
        //     'choice_label'=>'titreChapitre'
        // ])
        ->add('universite',EntityType::class,[
            'class' => Universite::class,
            'choice_label'=>'nom'
        ])
        ->add('image', FileType::class,array('data_class' => null))
        ->add('visibilite', ChoiceType::class, [
            'choices' => [
                'Gratuit' => 0,
                'Certifié' => 1,
                'Diplomé' => 2,
            ],
            'expanded' => true,
            'label' => 'Visibilité' 
        ])
        ->add('valider', SubmitType::class,['attr'=> ['class'=>'btn btn-primary waves-effect waves-light ']]);

    
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
