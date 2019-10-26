<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use App\Entity\Poste;


class FormateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom', TextType::class,array('label'=>'Saisir votre nom'))
        ->add('prenom', TextType::class,array('label'=>'Saisir votre prénom'))
        ->add('email', EmailType::class,array('label'=>'Adresse email'))
        ->add('telephone', TextType::class,array('label'=>'Numéro de téléphone'))
        ->add('photo', FileType::class,array('data_class' => null,'label'=>'Inserer votre photo'))
        ->add('cv', FileType::class,array('data_class' => null,'label'=>'Importer votre cv'))
        ->add('motivation', TextareaType::class,array('attr'=>['cols'=>'5','rows'=>'6']))
        ->add('q1',TextType::class,array('label'=>"Avez-vous déjà une expérience de l'enseignement ? *"))
        ->add('q2',TextType::class,array('label'=>"Avez-vous déja encadré des étudiants sur Crowdedu Africa?"))
        ->add('q3',TextType::class,array('label'=>'Parlez nous de vous?'))
             ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
