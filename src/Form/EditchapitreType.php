<?php

namespace App\Form;


use App\Entity\Cours;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EditchapitreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('titreChapitre',TextType::class)       
        ->add('duration',DateTimeType::class,[ 'date_label' => 'Starts On',],['attr'=> ['class'=>'col-lg-12 form-control ici','style'=>'margin-bottom:10px;']])
        ->add('cour',EntityType::class,[
            'class' => Cours::class,
            'choice_label'=>'titreCours'
        ])
        ->add('etat', ChoiceType::class, [
            'choices' => [
                'Actif' => true,
                'Inactif' => false,
            ],
            'expanded' => true,
            'label' => 'Etat' 
        ])
        ->add('video', FileType::class,array('data_class' => null))
        ->add('Modifier', SubmitType::class,['attr'=> ['class'=>'btn btn-primary waves-effect waves-light ']]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
