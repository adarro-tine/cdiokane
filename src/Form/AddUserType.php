<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Validator\Constraints\NotBlank;

class AddUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('email', EmailType::class,[
            'constraints' => [
                new NotBlank([
                    'message' => 'Merci d\'entrer un e-mail',
                ]),
            ],
            'required' => true,
            'attr' => ['class' =>'form-control'],
        ])
        ->add('prenom', TextType::class,['attr'=> ['class'=>'col-lg-12 form-control ici','style'=>'margin-bottom:10px;']])
            ->add('nom',TextType::class,['attr'=> ['class'=>'col-lg-12 form-control ici','style'=>'margin-bottom:10px;']])
            // ->add('email', EmailType::class,['attr'=> ['class'=>'col-lg-12 form-control ici','style'=>'margin-bottom:10px;']])
                ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options' => array('label' => 'Mot de passe','attr'=> ['class'=>'col-lg-12 form-control ici','style'=>'margin-bottom:10px;']),
                'second_options' => array('label' => 'Confirmation du mot de passe','attr'=> ['class'=>'col-lg-12 form-control ici','style'=>'margin-bottom:10px;']),
                ))
        ->add('roles', ChoiceType::class, [
            'choices' => [
                'Utilisateur' => 'ROLE_USER',
                'Editeur' => 'ROLE_EDITOR',
                'Administrateur' => 'ROLE_ADMIN'
            ],
            'expanded' => true,
            'multiple' => true,
            'label' => 'Rôles' 
        ])
        ->add('valider', SubmitType::class)
    ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
