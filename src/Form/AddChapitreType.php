<?php

namespace App\Form;

use App\Entity\Cours;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
// use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AddChapitreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('titreChapitre',TextType::class,['attr'=> ['class'=>'col-lg-12 form-control ici','style'=>'margin-bottom:10px;']])       
        ->add('chapitre',TextareaType::class,['attr'=> ['class'=>'col-lg-12 form-control ici','style'=>'margin-bottom:10px;height:400px;']])       
       
        ->add('video',TextType::class)
        ->add('cour',EntityType::class,[
            'class' => Cours::class,
            'choice_label'=>'titreCours',
                
        ],['attr'=> ['class'=>'input-group mb-3 input-group-prepend input-group-textcustom-select ici','style'=>'margin-bottom:10px;']])
       
        ->add('valider', SubmitType::class,['attr'=> ['class'=>'btn btn-primary waves-effect waves-light ']]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
