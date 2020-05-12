<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class UserType extends AbstractType
{
    
//////

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prenom', TextType::class,['attr'=> ['class'=>'col-lg-12 form-control ici','style'=>'margin-bottom:10px;']])
            ->add('nom',TextType::class,['attr'=> ['class'=>'col-lg-12 form-control ici','style'=>'margin-bottom:10px;']])
            ->add('email', EmailType::class,['attr'=> ['class'=>'col-lg-12 form-control ici','style'=>'margin-bottom:10px;']])
                ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options' => array('label' => 'Mot de passe','attr'=> ['class'=>'col-lg-12 form-control ici','style'=>'margin-bottom:10px;']),
                'second_options' => array('label' => 'Confirmation du mot de passe','attr'=> ['class'=>'col-lg-12 form-control ici','style'=>'margin-bottom:10px;']),
            ))
            ->add('submit', SubmitType::class, ['label'=>"S'inscrire", 'attr'=>['class'=>'btn btn-primary submit-btn btn-block']])
   
        ;
    
            }
   


//////
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([

        ]);
    }
}
