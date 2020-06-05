<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EditcategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('libelle',TextType::class,['attr'=> ['class'=>'col-lg-12 form-control ici','style'=>'margin-bottom:10px;']])
        ->add('imgC', FileType::class,array('data_class' => null))
        ->add('modifier', SubmitType::class,['attr'=> ['class'=>'btn btn-primary waves-effect waves-light ']]);
 
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
