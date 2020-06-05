<?php

namespace App\Controller;

use App\Entity\Donate;
use App\Entity\Campagne;
use App\Entity\Donateur;
use App\Form\DonateType;
use App\Repository\CampagneRepository;
use App\Repository\CategorieRepository;
use App\Repository\CommentaireRepository;
use App\Repository\SousCategorieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class DonController extends AbstractController
{
    /**
     * @Route("/donate", name="donate")
     */
 
    public function index(Request $request,CategorieRepository $cr,SousCategorieRepository $scr,CommentaireRepository $comre,CampagneRepository $campagnerepository)
    {
        
       require('../vendor/autoload.php');
       require('../configuration.php');
       $categories = $cr->findAll();
       $souscategories = $scr->findAll();
       $campagnes = $campagnerepository->findAll();
       $commentaires = $comre->findAll();
       $donate = new Donate();
       $form = $this->createForm(DonateType::class,$donate);
       $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) { 
          $nom = $donate->getNom();
          $montant = $donate->getMontant();
           $qt = 1;
            $invoice = new \Paydunya\Checkout\CheckoutInvoice();
            $invoice->addItem($nom,$qt,$montant,$montant);
            $invoice->setTotalAmount($montant);
            if($invoice->status == "completed"){
            $em = $this->getDoctrine()->getManager();
            $em->persist($donate);
            $em->flush();
            }
            //$invoice->setReturnUrl("http://127.0.0.1:8000/");
            if($invoice->create()) {
                 header("Location: ".$invoice->getInvoiceUrl());
                 dump($invoice->getInvoiceUrl());
            }else{
                  echo $invoice->response_text;
        }
      }  
        
        return $this->render('don/index.html.twig',['form'=>$form->createView(),
           'commentaires'=>$commentaires,
           'campagnes'=>$campagnes,
           'categories'=>$categories,
           'souscategories'=>$souscategories]);
    }

      /**
       * @Route("/donateur/{slug}/new",name="donateur")
       */
    public function donateur($slug,Request $request,CampagneRepository $campagnerepository,Campagne $campagneId){
       require('../vendor/autoload.php');
       require('../configuration.php');
        $donateur = new Donateur();
        $campagne = $campagnerepository->find($campagneId);
        $em = $this->getDoctrine()->getManager();
        $donateurs = $em->getRepository(Donateur::class)->findAll();
        $invoice = new \Paydunya\Checkout\CheckoutInvoice();
        if(isset($_POST['soutient'])){
        if($request->isMethod('POST')){
           extract($_POST);
           $donateur->setPrenom($prenom);
           $donateur->setNom($nom);
           $donateur->setTel($telephone);
           $donateur->setEmail($email);
           $donateur->setDate(new \DateTime());
           $donateur->setCampagne($campagne);
           $donateur->setMontant($montant);
           $name = $donateur->getNom();
           $somme = $donateur->getMontant();
            $qt = 1;
            $invoice = new \Paydunya\Checkout\CheckoutInvoice();
            $invoice->addItem($name,$qt,$somme,$somme);
            $invoice->setTotalAmount($somme);
            //$invoice->setReturnUrl("http://127.0.0.1:8000");
             if($invoice->getStatus() == "completed"){
             $em = $this->getDoctrine()->getManager();
             $em->persist($donateur);
             $em->flush();
              }

              if($invoice->create()) {
                header("Location: ".$invoice->getInvoiceUrl());
                dump($invoice->getInvoiceUrl());
               }
               else
               {
                 echo $invoice->response_text;
               }
            
          
        

         
          // $this->addFlash('success', 'Merci beaucoup');
           //return $this->redirectToRoute('cours');
       }
      }
      

      return $this->render('don/donateur.html.twig',['campagne'=>$campagne]);
    
  }
}
  

