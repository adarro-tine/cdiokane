<?php

namespace App\Controller;

use App\Entity\Cours;
use App\Entity\Projet;
use App\Entity\Chapitre;
use App\Entity\Commande;
use App\Form\CommandeType;
use App\Repository\CoursRepository;
use App\Repository\CampagneRepository;
use App\Repository\CategorieRepository;
use App\Repository\CommentaireRepository;
use App\Repository\SousCategorieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PanierController extends AbstractController
{
    const SUCCESS = 'success';
    const PANIER= 'panier';
    const PRODUITS = 'produits';
    /**
     * @Route("/panier", name="page_panier")
     */
    public function panier(Request $request,CategorieRepository $cr,SousCategorieRepository $scr,CampagneRepository $campagne,CommentaireRepository $comrepo)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $categories = $cr->findAll();
        $souscategories = $scr->findAll();
        $campagnes= $campagne->findAll();
        $commentaires=$comrepo->findAll();
        $session = $request->getSession();
        if(!$session->has(self::PANIER)){$session->set(self::PANIER,array());}
         $panier = $session->get(self::PANIER);
         $produits = $entityManager->getRepository(Cours::class)->findArray(array_keys($panier));
         foreach ($produits as $value) {
            $value->setImage(base64_encode(stream_get_contents($value->getImage())));
        }
        return $this->render('panier/panier.html.twig', [
            'produits'=>$produits,self::PANIER => $session->get(self::PANIER),
            'categories'=>$categories,
            'souscategories'=>$souscategories,
            'campagnes'=>$campagnes,
            'commentaires'=>$commentaires
        ]);
    }   
    /**
     * @Route("/ajout_panier/{id}", name="page_ajouterPanier")
     */
    public function ajoutPanier($id,Request $request )
    {
        $session = $request->getSession();
    if (!$session->has(self::PANIER)) {
            $session->set(self::PANIER,array());
            $session->getFlashBag()->add(self::SUCCESS, " Article ajouté avec succès");
        }
        $panier = $session->get(self::PANIER);
    
    if (array_key_exists($id, $panier)) {
        if ($request->query->get('qte') != null) {
            $panier[$id] = $request->query->get('qte');
            $this->get('session')->getFlashBag()->add(self::SUCCESS,'Quantité modifié avec succès');
        }
        
        }
            if ($request->query->get('qte') != null){
                $panier[$id] = $this->$request->query->get('qte');
            }
            
                $panier[$id] = 1;            
                $this->get('session')->getFlashBag()->add(self::SUCCESS,'Article ajouté avec succès');
        
        $session->set(self::PANIER,$panier);
        return $this->redirectToRoute('page_panier');
    }

    /**
     * @Route("/menu", name="page_menu")
     */
    public function menu(Request $request, Cours $produits = null)
    {
        
        $session = $request->getSession();
        if (!$session->has(self::PANIER)){
            $produits = 0;
        }
            $produits = count(is_array($session->get(self::PANIER)) ? $session->get(self::PANIER) : []);
        
        return $this->render('panier/index.html.twig', array(self::PRODUITS => $produits));
    }
   
 /**
     * @Route("/facture", name="facture")
     *  @IsGranted("ROLE_USER")
     */

    public function facture()
    {
        $em = $this->getDoctrine()->getManager();  
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();
        $panier = $session->get('panier');
        $commande = array($panier);
        $total = 0;
               
        $produits = $em->getRepository(Cours::class)->findArray(array_keys($session->get('panier')));
        foreach($produits as $produit)
        {
            $prix = ($produit->getPrix() * $panier[$produit->getId()]) ;
            $total += $prix;        
            $commande['produit'][$produit->getTitreCours()] = array(
            'prix' => round($produit->getPrix()));
        
        }
    
        $commande['prixHT'] = round($total,2);  
        return $commande;
    }

     

     /**
     * @Route("/valider", name="valider_commande",methods={"POST","GET"})
     *  @IsGranted("ROLE_USER")
     */

    public function validerCommande(Request $request,CategorieRepository $cr,SousCategorieRepository $scr,CampagneRepository $campagne,CommentaireRepository $comrepo):Response
    {     
          require('../vendor/autoload.php');
          require('../configuration.php');
          $entityManager = $this->getDoctrine()->getManager();
          $session = $request->getSession(); 
          $invoice = new \Paydunya\Checkout\CheckoutInvoice();

           $categories = $cr->findAll();
               $souscategories = $scr->findAll();
              $campagnes = $campagne->findAll();
              $commentaires = $comrepo->findAll();
                    
              if(!$session->has(self::PANIER)){
                $session->set(self::PANIER,array());
               }
               $panier = $session->get(self::PANIER);
              $produits = $entityManager->getRepository(Cours::class)->findArray(array_keys($panier)); 
               $user = $this->getUser();
               $commande = new Commande();
               $total = 0;
               $com = array($panier);
               foreach($produits as $produit)
               {  
                   $cours = $produit;     
               }
    
               //
               $form = $this->createForm(CommandeType::class,$commande);
               $form->handleRequest($request);
               if ($form->isSubmitted() && $form->isValid()) { 

                   foreach($produits as $produit)
                   {
                       $prix = ($produit->getPrix() * $panier[$produit->getId()]) ;
                       $total += $prix;  
                       $nom = $produit->getTitreCours();     
                       $com['produit'][$produit->getTitreCours()] = array(
                       'prix' => round($produit->getPrix()));
                       $slug = $produit->getSlug();
                   
                   }
                    $qt = count($produits);
                   $com['prix'] = round($total,2); 
                   $invoice = new \Paydunya\Checkout\CheckoutInvoice();
                   $invoice->addItem($nom,$qt,$prix,$prix);
                   $invoice->setTotalAmount($total);
                  
                   if($invoice->create()) {
                     header("Location: ".$invoice->getInvoiceUrl());
                        
                           if($invoice->getStatus() == "completed"){
                            $commande->setUser($user);
                            $commande->setCours($cours);
                            $commande->setCommande($this->facture());
                            $commande->setDate(new \DateTime());
                            $commande->setSubvention(false);
                            $commande->setStatut(1);
                            $em = $this->getDoctrine()->getManager();
                            $em->persist($commande);
                            $em->flush();    
                    }
                        dump($invoice->getInvoiceUrl());
                        //die();             
                       }
                       
                    else{
                        echo $invoice->response_text;
                        }
                       }
                       //dump($invoice->getStatus());
                       //die();
                      // $invoice->setReturnUrl("http://127.0.0.1:8000/chapitres/".$slug);    

                      /* dump($invoice->getStatus());
                       die();*/
           
           
        foreach ($produits as $value) {
            $value->setImage(base64_encode(stream_get_contents($value->getImage())));
        }
        return $this->render('panier/finaliser_commande.html.twig',['form' => $form->createView(),
        'produits'=>$produits,self::PANIER => $session->get(self::PANIER),
        'total'=>$total,
        'categories'=>$categories,
        'souscategories'=>$souscategories,
        'campagnes'=>$campagnes,
        'commentaires'=>$commentaires
        ]);
    
}
    /**
     * @Route("/supprimer/{id}", name="page_supprimerPanier")
     */
    public function supprimerAction($id)
    {

        $session= new Session();

        $panier = $session->get(self::PANIER);
        
        if (array($id, $panier)) {
            unset($panier[$id]);
            $session->set(self::PANIER,$panier);
        
            $session->getFlashBag()->add(self::SUCCESS, " Article supprimé avec succès ");
        }
        return $this->redirectToRoute('page_panier');
    }

     /**
     * @Route("/chapitres/{slug}", name="chapitres_complet")
     *  @IsGranted("ROLE_USER")
     */
    public function chapitresComplet($slug,Request $request){
        $entityManager = $this->getDoctrine()->getManager();
        $session = $request->getSession();
        $commande = $entityManager->getRepository(Commande::class)->findAll();
        $courID = $entityManager->getRepository(Cours::class)->findOneBy(['slug'=>$slug]);
        foreach($commande as $p){
        if($p->getStatut()==2){
        $chapitres = $entityManager->getRepository(Chapitre::class)->findOneBy(['etat'=>1]);
        }
        }

        $courID->setImage(base64_encode(stream_get_contents($courID->getImage())));

        return $this->render('cours/chapitres.html.twig', [
            'cour' => $courID,
            'chapitres'=>$chapitres
        ]);
      
    }

}
