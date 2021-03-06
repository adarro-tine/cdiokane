<?php

namespace App\Controller;

    use App\Entity\User;
use App\Entity\Cours;
use App\Entity\Categorie;
use App\Entity\SousCategorie;
use App\Service\FileUploader;
use App\Repository\CoursRepository;
use App\Repository\CampagneRepository;
use App\Repository\ChapitreRepository;
use App\Repository\CommandeRepository;
use App\Repository\CategorieRepository;
use App\Repository\FormateurRepository;
use App\Repository\CommentaireRepository;
use App\Repository\SousCategorieRepository;
use Knp\Component\Pager\PaginatorInterface;
use App\Form\AddcommentaireType;
use App\Entity\Commentaire;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class CoursController extends Controller
{
    /**
     * @Route("/", name="cours")
     * 
     */
    public function allCours(CoursRepository $coursrepo,CategorieRepository $cateRepo,CommentaireRepository $commentrepo,PaginatorInterface $paginator,Request $request,CommandeRepository $cr,ChapitreRepository $chapitreRepository,SousCategorieRepository $souscatrepo,CampagneRepository $campagnerepository,FormateurRepository $fr)
    {  
        
        $user = new User();
        $session= new Session();
        $product = $coursrepo->findOneBy(['visibilite'=>0]);
        $categories = $cateRepo->findAll();
        $commentaires= $commentrepo->findAll();
        $souscategories = $souscatrepo->findAll();
        $campagnes=$campagnerepository->findAll();
        $formateurs = $fr->findAll();
        $allCours = $paginator->paginate(
            $product,
            $request->query->getInt('page', 1),
            3
        );
        if ($session->has('panier')) {
            $panier = $session->get('panier');
        }
            $panier=false;
                
        return $this->render('cours/allCours.html.twig', [
            'produits' => $allCours,
            'categories'=>$categories,
            'commentaires'=>$commentaires,
            'souscategories'=>$souscategories,
            'campagnes'=>$campagnes,
            'formateurs'=>$formateurs
                    ]);
    }
    
        /**
     * @Route("/cour/{slug}", name="cour")
     * 
     */
    public function findOneCour($slug,CoursRepository $coursOnerepo,CategorieRepository $cr,SousCategorieRepository $scr,CampagneRepository $campagnerepository,CommentaireRepository $comrepo) :Response
    {
        $courID = $coursOnerepo->findOneBy(['slug'=> $slug]);
            
        return $this->render('cours/detailcour.html.twig', [
            'cour' => $courID,
            'categories'=>$cr->findAll(),
            'souscategories'=>$scr->findAll(),
            'campagnes'=>$campagnerepository->findAll(),
            'commentaires'=>$comrepo->findAll()
        ]);
    }
     /**
     * @Route("/categories/{slug}", name="page_produitsByCategory")
     * 
     */
    public function findOneCoursCategorie($slug,CoursRepository $cr, Request $request, Categorie $categorie, CategorieRepository $cateRepo,SousCategorieRepository $scr,CampagneRepository $campagnerepository,CommentaireRepository $comrepo,CoursRepository $courRepo)
    {    
        $categorielib = $cateRepo->find($categorie);
        $tousLesCategories = $cateRepo->findAll();
        $souscategories = $scr->findAll();
        $cours=$courRepo->findAll();
        $campagnes = $campagnerepository->findAll();
        $commentaires = $comrepo->findAll();
        $findcours = $cr->produitsByCategorie($categorie);
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $findcours, $request->query->getInt('page', 1), 10);
       
        return $this->render('cours/courBycategorie.html.twig', [
            'categorie' => $pagination,
            'categorielibelle'=> $categorielib,
            'categories'=>$tousLesCategories,
            'souscategories'=>$souscategories,
            'commentaires'=>$commentaires,
            'campagnes'=>$campagnes,
            'cours'=>$cours]);
    }
    /**
     * @Route("/sous-categorie/{slug}", name="souscategorie")
     * 
     */
    public function findCoursOneSousCategorie($slug,Request $request,CoursRepository $cr,SousCategorie $souscat, SousCategorieRepository $souscatrepo,CampagneRepository $campagnerepository,CategorieRepository $catrepo,CommentaireRepository $comrepo)
    {    
        $nomsouscategorie = $souscatrepo->find($souscat);
        $allSousCategory = $souscatrepo->findAll();
        $categories = $catrepo->findAll();
        $campagnes = $campagnerepository->findAll();
        $commentaires = $comrepo->findAll();
        $findcours = $cr->produitsBySousCategorie($souscat);
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $findcours, $request->query->getInt('page', 1), 10);
        return $this->render('cours/courBySouscategorie.html.twig', [
            'souscategorie' => $pagination,
            'nomsouscategorie'=> $nomsouscategorie,
            'souscategories'=>$allSousCategory,
            'categories'=>$categories,
            'campagnes'=>$campagnes,
            'commentaires'=>$commentaires ]);
    }

    /**
     * @Route("/mes-cours",name="mes-cours")
     */

    public function mesCours(CoursRepository $cr,CommandeRepository $commande){
       
        $cours = $cr->findAll();
        $commandes = $commande->findAll(); 
            return $this->render('cours/mesCours.html.twig',['cours'=>$cours,'commandes'=>$commandes]);
            }

            /**
     * @Route("/mes-cours/{slug}", name="mes-cours-slug")
     * 
     */
    public function findOneCourCommande($slug,CoursRepository $coursOnerepo,ChapitreRepository $chaprepo,CommandeRepository $commanderepository,CategorieRepository $categorierepository,SousCategorieRepository $scr,CampagneRepository $campagnerepository,CommentaireRepository $comrepo,CommandeRepository $cmdrepository,FileUploader $fileUploader) :Response
    { 
        
        $courID = $coursOnerepo->findOneBy(['slug'=> $slug]);
        $user = $this->getUser();
        if($user == null){
            return $this->redirectToRoute('cours');
        }
        else{
            $file = $user->getPhoto();
            $fileName = $fileUploader->upload($file);
            $user->setPhoto($fileName);
        $categories = $categorierepository->findAll();
        $souscategories = $scr->findAll();
        $campagnes = $campagnerepository->findAll();
        $commentaires = $comrepo->findAll();
        $commandes = $cmdrepository->findAll();
        }
        return $this->render('cours/mesCoursSlug.html.twig', [
            'cour' => $courID,
            'categories'=>$categories,
            'souscategories'=>$souscategories,
            'campagnes'=>$campagnes,
            'commentaires'=>$commentaires,
            'commandes'=>$commandes
        ]);
        
    }
    /**
     * @Route("/showCommande/{slug}", name="show_commande",methods="GET")
     * 
     */
    public function finaliserCommande(Cours $cours)
    {

        return $this->render('panier/finaliser_commande.html.twig', [
        'cour'=>$cours ]);

    }
   /**
     * @Route("/search" ,name="search")
     */
    public function searchAction(Request $request,CoursRepository $coursrepo){
        $data = $request->request->get('search');
        if(empty($data)){
        return $this->redirectToRoute('cours');
        }
        
    else{
    $res = $coursrepo->findCoursByName($data);
    }
    foreach ($res as $value) {
    $value->setImage(base64_encode(stream_get_contents($value->getImage())));
    }
    return $this->render('cours/search.html.twig', array(
        'res' => $res)); 
}

/**
 * @Route("/{_locale}/traduction/{name}")
 */
public function  translationAction($name){
    return $this->render('cours/translation.html.twig',['name'=>$name]);
}


/**
 * @Route("/new",name="new")
 */
 public function index2(){
     return $this->render("home/index2.html.twig");
 }

 /**
     * @Route("/commentaire/add", name="add_commentaire")
     * @IsGranted("ROLE_USER")
     */
    public function addcommentaire( Request $request)
    {
        $commentaire = new Commentaire();
        $form = $this->createForm(AddcommentaireType::class, $commentaire);
       // Nous récupérons les données
        $form->handleRequest($request);

    // Nous vérifions si le formulaire a été soumis et si les données sont valides
    if ($form->isSubmitted() && $form->isValid()) {
        $doctrine = $this->getDoctrine()->getManager();

        // On hydrate notre instance $commentaire
        $doctrine->persist($commentaire);

        // On écrit en base de données
        $doctrine->flush();
        return $this->redirectToRoute('cours');
    }
        return $this->render('cours/add_commentaire.html.twig', [
            'commentaireForm' => $form->createView(),
        ]);
    }
}