<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Poste;
use App\Entity\AddCours;
use App\Entity\Formateur;
use App\Form\AddCoursType;
use App\Form\FormateurType;
use App\Service\FileUploader;
use App\Repository\PosteRepository;
use App\Repository\CampagneRepository;
use App\Repository\CategorieRepository;
use App\Repository\FormateurRepository;
use App\Repository\CommentaireRepository;
use App\Repository\SousCategorieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PosteController extends AbstractController
{
    /**
     * @Route("/poste", name="poste")
     */
    public function poste(PosteRepository $posterepo,CategorieRepository $cr,SousCategorieRepository $scr,CampagneRepository $campagne,CommentaireRepository $comrepo)
    {        
            $categories = $cr->findAll();
            $souscategories = $scr->findAll();
            $campagnes = $campagne->findAll();
            $commentaires = $comrepo->findAll();
            $postes= $posterepo->findAll();
            return $this->render('poste/poste.html.twig',['postes'=>$postes,
            'categories'=>$categories,
            'souscategories'=>$souscategories,
            'campagnes'=>$campagnes,
            'commentaires'=>$commentaires]);
    }

     /**
      * @Route("/poste/{slug}",name="poste_slug")
      */
      public function findOnePoste($slug,PosteRepository $posterepo,Poste $poste,CategorieRepository $cr,SousCategorieRepository $scr,CampagneRepository $campagne,CommentaireRepository $comrepo){
          $rolePoste=$posterepo->find($poste);
          $allPostes=$posterepo->findAll();
          $categories = $cr->findAll();
            $souscategories = $scr->findAll();
            $campagnes = $campagne->findAll();
            $commentaires = $comrepo->findAll();
            
          return $this->render('poste/poste_slug.html.twig', [
            'formateurs' => $rolePoste,
            'cursus'=>$allPostes,
            'categories'=>$categories,
            'souscategories'=>$souscategories,
            'campagnes'=>$campagnes,
            'commentaires'=>$commentaires]);
      }

      /**
       * @Route("/poste/{slug}/new",name="inscription_formateur")
       */
      public function RegisterFormateur($slug,Request $request,FileUploader $fileUploader,Poste $poste,PosteRepository $posterepo,UserPasswordEncoderInterface $passwordEncoder, \Swift_Mailer $mailer,CategorieRepository $cr,SousCategorieRepository $scr,CampagneRepository $campagnerepository,CommentaireRepository $commentairesrepository)
      {
          $rolePoste=$posterepo->find($poste);
          $postes=$posterepo->findAll();
          $commentaires = $commentairesrepository->findAll();
          $categories = $cr->findAll();
          $souscategories = $scr->findAll();
          $campagnes = $campagnerepository->findAll();
          $formateur = new Formateur();
          $form = $this->createForm(FormateurType::class, $formateur);
          $form->handleRequest($request);
          if ($form->isSubmitted() && $form->isValid()){
            $formateur->setPoste($rolePoste);
            $formateur->setRole(['ROLE_FORMATEUR']);
            $file = $formateur->getPhoto();
            $fileName = $fileUploader->uploadPhoto($file);
            $formateur->setPhoto($fileName);
            $fileCv = $formateur->getCv();
            $fileNameCv = $fileUploader->uploadCv($fileCv);
            $formateur->setCv($fileNameCv);
            $nom= $formateur->getNom();
            $email= $formateur->getEmail();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formateur);
            $entityManager->flush();
             $message = (new \Swift_Message("Nouveau message d'inscription de formateurs!"))
             ->setFrom('crowdedu.edu@gmail.com')
             ->setTo($email)
             ->setBody($this->renderView('poste/email.html.twig',array('nom' => $nom)),'text/html');
             $mailer->send($message);
             $this->addFlash('success', "Un email vient d'etre envoyé à votre adresse email");
              return $this->redirectToRoute('poste');
      
    }
  
    
    
      return $this->render(
        'poste/poste_inscription.html.twig',
        array('form' => $form->createView(),
        'postes'=>$postes,
        'rolePoste'=>$rolePoste,
        'commentaires'=>$commentaires,
        'campagnes'=>$campagnes,
        'categories'=>$categories,
        'souscategories'=>$souscategories)
    );

    }

   

   

  }
    
   
  
