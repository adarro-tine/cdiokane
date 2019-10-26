<?php

namespace App\Controller;
use App\Entity\User;
use App\Form\UserType;
use App\Service\FileUploader;
use App\Form\UserEditPhotoType;
use App\Repository\CampagneRepository;
use App\Repository\CategorieRepository;
use App\Repository\SousCategorieRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class RegistrationController extends AbstractController
{
    /**
     * @Route("/registration", name="registration")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $errors = [];
         if ($form->isSubmitted() && $form->isValid()) { 
            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);
            $user->setIsActive(true);
            $user->setRoles(['ROLE_USER']);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            $this->addFlash('success', 'Votre compte à bien été enregistré.');
            return $this->redirectToRoute('registration');
         }
        return $this->render( 
            'registration/index.html.twig',
            array('form' => $form->createView())
        );
    
    }

    /**
     * @Route("/edit/{slug}/user" , name="edit" ,methods={"GET","POST"})
     */
    public function editAction( Request $request,User $personne,$slug, UserRepository $userrepo,CategorieRepository $cr,SousCategorieRepository $scr,CampagneRepository $campagnerepository)
    {
      $personne = $userrepo->findOneBy(['slug'=>$slug]);
      $categories = $cr->findAll();
      $souscategories = $scr->findAll();
        if(isset($_POST['modifier'])){
        if($request->isMethod('POST')){
        extract($_POST);
        $personne->setNom($nom);
        $personne->setPrenom($prenom);
        $personne->setEmail($email);
        $personne->setUsername($username);
        $em = $this->getDoctrine()->getManager();
        $em->persist($personne);
        $em->flush();
        $this->addFlash('success', 'Utilisateur modifié avec success.');
      }
    }
      return $this->render('registration/edit.html.twig', array(
        'personne' => $personne,
        'categories'=>$categories,
        'souscategories'=>$souscategories,
        'campagnes'=>$campagnerepository->findAll()

      ));
    }
    

    
    /**
     * @Route("/edit/photo/profil",name="edit_photo")
     * @IsGranted("ROLE_USER")
     */
    public function editPhoto(Request $request,FileUploader $fileUploader,CampagneRepository $campagnerepository,CategorieRepository $cr,SousCategorieRepository $scr){
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();  
        $categories = $cr->findAll();
        $souscategories = $scr->findAll(); 
        $form = $this->createForm(UserEditPhotoType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
        $file = $user->getPhoto();
        $fileName = $fileUploader->upload($file);
        $user->setPhoto($fileName);
        $em->persist($user);
        $em->flush();
        return $this->redirectToRoute('edit', array('slug' => $user->getSlug()));
      }

      return $this->render('registration/edit_photo.html.twig', array(
        'personne' => $user,
        'form'   => $form->createView(),
        'categories'=>$categories,
        'souscategories'=>$souscategories,
        'campagnes'=>$campagnerepository->findAll()
      ));
    }

    /**
     *@Route("/tabs",name="tabs")
     */
    public function tabs(){
      return $this->render("home/tabs.html.twig");
    }

     
}
