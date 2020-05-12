<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Entity\Campagne;
use App\Form\CampagneType;
use App\Service\FileUploader;
use App\Repository\CoursRepository;
use App\Repository\CampagneRepository;
use App\Repository\CategorieRepository;
use App\Repository\CommentaireRepository;
use App\Repository\SousCategorieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class CampagneController extends Controller
{
    /**
     * @Route("/campagne", name="campagne", methods={"GET","POST"})
     */
    public function index(Request $request,CoursRepository $coursrepository,CampagneRepository $campagneRepository):Response
    {
        $user = $this->getUser();
        $cours=$coursrepository->findAll();
        $campagnes = $campagneRepository->findAll();
        $campagne = new Campagne();
        if(isset($_POST['ajouter'])){
            if($request->isMethod('POST')){
               extract($_POST);
               $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
              $longueurMax = strlen($caracteres);
             $chaineAleatoire = '';
            for ($i = 0; $i < 10; $i++)
           {
         $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
           } 
               $campagne->setTelephone($telephone);
               $campagne->setVille($ville);
               $campagne->setPays($pays);    
               $campagne->setCours($coursrepository->findOneBy(['id'=>$coursid]));
               $campagne->setPhoto(file_get_contents($_FILES['photo']['tmp_name']));
               $campagne->setParcoursEdu($parcoursEdu);
               $campagne->setAttentes($attentes);
               $campagne->setMotivation($motivation);
               $campagne->setPerspective($perspective);
               $campagne->setVideo($video);
               $campagne->setSlug($chaineAleatoire);
               $campagne->setDate(new \DateTime());
               $campagne->setFacebook("http://crowdeduafrica.com/campagne/user/".$chaineAleatoire);
               $campagne->setTwitter("http://crowdeduafrica.com/campagne/user/".$chaineAleatoire);
               $campagne->setLinkedin("http://crowdeduafrica.com/campagne/user/".$chaineAleatoire);
               $campagne->setInstagram("http://crowdeduafrica.com/campagne/user/".$chaineAleatoire);
               $campagne->setUser($user);
               $em = $this->getDoctrine()->getManager();
               $em->persist($campagne);
               $em->flush();
               $this->addFlash('success', 'Campagne enregistré avec success.');

               return $this->redirectToRoute('cours');
          }
          else{
            $this->addFlash('success', 'Vous avez déja un campagne');

          }
           }
           return $this->render('campagne/index.html.twig',array(
            'campagnes'=>$campagne,
            'cours'=>$cours,
            'user'=>$user)
        );
  }
  /**
   * @Route("all/campagnes",name="allcampagnes")
   */
  public function allCampagnes(CategorieRepository $cr,Request $request,SousCategorieRepository $scr,CampagneRepository $campagneRepository){
      $categories = $cr->findAll();
      $souscategories = $scr->findAll();
      $campagnes = $campagneRepository->findAll();
      $paginator  = $this->get('knp_paginator');
      $campagnepagination = $paginator->paginate(
        $campagnes,
        $request->query->getInt('page', 1),
        6
    );
      foreach ($campagnepagination as $value) {
        $value->setPhoto(base64_encode(stream_get_contents($value->getPhoto())));
    }
    return $this->render('campagne/all.html.twig',['categories'=>$categories,
                                                    'souscategories'=>$souscategories,
                                                     'campagnes'=>$campagnepagination]);
  }

  /**
   * @Route("campagne/user/{slug}",name="campagneUser")
   */
  public function campagneUser(CampagneRepository $campagneRepository,Campagne $campagne,CategorieRepository $cr,SousCategorieRepository $scr){
    $categories = $cr->findAll();
    $souscategories = $scr->findAll();
    $campagneUser = $campagneRepository->find($campagne);
    $campagneUser->setPhoto(base64_encode(stream_get_contents($campagneUser->getPhoto()))); 
    return $this->render("campagne/campagneUser.html.twig",['categories'=>$categories,
                                                            'souscategories'=>$souscategories,
                                                            'campagne'=>$campagneUser]);

  }

   /**
     * @Route("demarrer" , name="demarrer")
     */
    public function demarrerCampagne(CategorieRepository $cr,SousCategorieRepository $scr,CommentaireRepository $comrepo,CampagneRepository $campagnerepo){
      $categories = $cr->findAll();
      $souscategories = $scr->findAll();
      $commentaires = $comrepo->findAll();
      $campagnes = $campagnerepo->findAll();
      return $this->render('campagne/demarrerCampagne.html.twig',['commentaires'=>$commentaires,
                                                             'categories'=>$categories,
                                                             'souscategories'=>$souscategories,
                                                             'campagnes'=>$campagnes]);
    }
}
