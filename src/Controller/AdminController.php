<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Chapitre;
use App\Entity\Commande;
use App\Entity\Campagne;
use App\Entity\Universite;
use App\Form\EditType;
use App\Form\EditCourType;
use App\Entity\Cours;
use App\Form\AddUserType;
use App\Form\AddChapitreType;
use App\Form\EditchapitreType;
use App\Form\AddCategorieType;
use App\Form\AddCoursType;
use App\Form\UniversityAddType;
use App\Form\EditcategorieType;
use App\Controller\Categories;
use App\Service\FileUploader;
use App\Entity\Categorie;  
use App\Repository\UserRepository;
use App\Repository\UniversiteRepository;
use App\Repository\CommentaireRepository;
use App\Repository\ChapitreRepository;
use App\Repository\CampagneRepository;
use App\Repository\CommandeRepository;
use App\Repository\CoursRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class AdminController extends AbstractController
{
    const ADMIN = 'admin';
    /**
     * @Route("/admin", name="admin")
     * 
     */
    public function index(UserRepository $userRepository)
    {


       if(!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
         throw new AccessDeniedException('acces limité aux admins ');
       }
       $users=$userRepository->findAll();

       return $this->render('admin/list/list_user.html.twig', ['mainNavAdmin' => true, 'title' => 'Espace Admin', 'users'=>$users]
        );
    }
    /**
 * @Route("/admin/utilisateurs/modifier/{id}", name="modifier_utilisateur")
 */
public function editUser(User $user, Request $request,FileUploader $fileUploader)
{
    $this->denyAccessUnlessGranted('ROLE_ADMIN');
    $form = $this->createForm(EditType::class, $user);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $file = $user->getPhoto();
        $fileName = $fileUploader->upload($file);
        $user->setPhoto($fileName);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        $this->addFlash('message', 'Utilisateur modifié avec succès');
        return $this->redirectToRoute(self::ADMIN);
    }
    
    return $this->render('admin/edit/edit_user.html.twig', [
        'userForm' => $form->createView(),
    ]);
}

    /**
     * @Route("/admin/utilisateurs/delete/{id}", name="delete", methods={"GET"})
     */
    public function deleteUser(User $user,CampagneRepository $userRepository,$id,UserRepository $users)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        if($user){
            $benuser = $users->findOneBy(['id'=>$id]);
            $dieulbenuser = $user->getId();
        $campagne = $userRepository->campagneUser( $dieulbenuser);
        foreach($campagne as $val){
           $em->remove($val);
        }
        
        }
        $em->flush();

        // redirige la page
        return $this->redirectToRoute(self::ADMIN);
    }

 /**
     * @Route("/admin/utilisateurs/add", name="add_utilisateur", )
     */
    public function addUser( Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $user = new User();
        $form = $this->createForm(AddUserType::class, $user);
       // Nous récupérons les données
        $form->handleRequest($request);

    // Nous vérifions si le formulaire a été soumis et si les données sont valides
    if ($form->isSubmitted() && $form->isValid()) {
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $longueurMax = strlen($caracteres);
        $chaineAleatoire = '';
      for ($i = 0; $i < 10; $i++)
      {
    $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
      } 
      $password = $passwordEncoder->encodePassword($user, $user->getPassword());
      $user->setPassword($password);
      $user->setIsActive(true);
        // Hydrate notre commentaire avec l'article
        $user->setSlug($chaineAleatoire);

        // Hydrate notre commentaire avec la date et l'heure courants
        // $user>setCreatedAt(new \DateTime('now'));

        $doctrine = $this->getDoctrine()->getManager();

        // On hydrate notre instance $commentaire
        $doctrine->persist($user);

        // On écrit en base de données
        $doctrine->flush();
        return $this->redirectToRoute(self::ADMIN);
    }
    return $this->render('admin/add/add_user.html.twig', [
        'userForm' => $form->createView(),
    ]);
}
 //............... Gestion chapitre......................
    
     /**
     * @Route("/admin/chapitre", name="list_chapitre")
     * 
     */
    public function listerchapitre(ChapitreRepository $chapitreRepository)
    {
        $chapitre = $chapitreRepository->findAll();
        return $this->render('admin/list/lister_chapitre.html.twig', ['chapitre'=>$chapitre,
           
        ]);
    }
     /**
     * @Route("/admin/chapitre/add", name="add_chapitre", )
     */
    public function addchapitre( Request $request, FileUploader $fileUploader)
    {
        $chapitre = new Chapitre();
        $form = $this->createForm(AddChapitreType::class, $chapitre);
       // Nous récupérons les données
        $form->handleRequest($request);

    // Nous vérifions si le formulaire a été soumis et si les données sont valides
    if ($form->isSubmitted() && $form->isValid()) {
        $doctrine = $this->getDoctrine()->getManager();
        $chapitre->setSlug($chapitre->getTitreChapitre());
       $chapitre->setEtat(0);
        $chapitre->setDuree(new \DateTime());
        // On hydrate notre instance $commentaire
        $doctrine->persist($chapitre);
        // On écrit en base de données
        $doctrine->flush();
        return $this->redirectToRoute('list_chapitre');
    }
        return $this->render('admin/add/add_chapitres.html.twig', [
            'chapitreForm' => $form->createView(),
        ]);
}
      /**
     * @Route("/admin/chapitre/delete/{id}", name="delete_chapitre", methods={"GET"})
     */
    public function deletechapitre(Chapitre $chapitre)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($chapitre);
        $em->flush();

        // redirige la page
        return $this->redirectToRoute('list_chapitre');
    }

    /**
 * @Route("/admin/chapitre/modifier/{id}", name="modifier_chapitre")
 */
public function editchapitre(Chapitre $chapitre, Request $request,FileUploader $fileUploader)
{

    $form = $this->createForm(EditchapitreType::class, $chapitre);
    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid()) {
        $file = $chapitre->getImage();
        $fileName = $fileUploader->upload($file);
        $chapitre->setVideo($fileName);
        $chapitre->setSlug($chapitre->getTitreChapitre());
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($chapitre);
        $entityManager->flush();

        $this->addFlash('message', 'Chapitre modifiée avec succès');
        return $this->redirectToRoute('list_chapitre');
    }

    return $this->render('admin/edit/edit_chapitre.html.twig', [
        'chapitreForm' => $form->createView(),
    ]);
}

    //............... Gestion cours......................
    /**
     * @Route("/admin/cours", name="list_cour")
     * 
     */
    public function listercours(CoursRepository $coursRepository)
    {
        $cour = $coursRepository->findAll();
        return $this->render('admin/list/lister_cours.html.twig', ['cour'=> $cour,
           
        ]);
    }
    
    
    /**
 * @Route("/admin/cours/modifier/{id}", name="modifier_cour")
 */
public function editCour(Cours $cour, Request $request,FileUploader $fileUploader)
{

    $form = $this->createForm(EditCourType::class, $cour);
    $form->handleRequest($request);
    
    if ($form->isSubmitted() && $form->isValid()) {
        $file = $cour->getImage();
        $fileName = $fileUploader->upload($file);
        $cour->setImage($fileName);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($cour);
        $entityManager->flush();

        $this->addFlash('message', 'Utilisateur modifié avec succès');
        return $this->redirectToRoute('list_cour');
    }

    return $this->render('admin/edit/edit_cour.html.twig', [
        'courForm' => $form->createView(),
    ]);
}
 /**
     * @Route("/admin/cours/delete/{id}", name="delete_cour", methods={"GET"})
     */
    public function deletecour(Cours $cour,CommandeRepository $commandes,$id,CampagneRepository $campagnes)
    {
    
        $em = $this->getDoctrine()->getManager();
        $em->remove($cour);
        $em->flush();

        // redirige la page
        return $this->redirectToRoute('list_cour');
    }
        /**
     * @Route("/admin/cour/add", name="add_cour", )
     */
    public function addcour( Request $request, FileUploader $fileUploader)
    {
        $cour = new Cours();
        $form = $this->createForm(AddCoursType::class, $cour);
       // Nous récupérons les données
        $form->handleRequest($request);

    // Nous vérifions si le formulaire a été soumis et si les données sont valides
    if ($form->isSubmitted() && $form->isValid()) {
        $file = $cour->getImage();
        $fileName = $fileUploader->upload($file);
        $cour->setImage($fileName);
        $cour->setSlug($cour->getTitreCours());
        $cour->setVisibilite(0);
        $doctrine = $this->getDoctrine()->getManager();

        // On hydrate notre instance $commentaire
        $doctrine->persist($cour);

        // On écrit en base de données
        $doctrine->flush();
        return $this->redirectToRoute('list_cour');
    }
        return $this->render('admin/add/add_cours.html.twig', [
            'courForm' => $form->createView(),
        ]);
}

// ....................lister les Categories cour.........................
    /**
     * @Route("/admin/categorie", name="list_categorie_cour")
     * 
     */
    public function listercategorie(CategorieRepository $categorieRepository)
    {
        
        $categorie = $categorieRepository->findAll();
       
        return $this->render('admin/list/lister_categories.html.twig', ['categorie'=>$categorie,
           
        ]);
    }
    /**
     * @Route("/admin/categorie/add", name="add_categorie", )
     */
    public function addcategorie( Request $request, FileUploader $fileUploader)
    {
        $categorie = new Categorie();
        $form = $this->createForm(AddCategorieType::class, $categorie);
       // Nous récupérons les données
        $form->handleRequest($request);

    // Nous vérifions si le formulaire a été soumis et si les données sont valides
    if ($form->isSubmitted() && $form->isValid()) {
        $file = $categorie->getImgC();
        $fileName = $fileUploader->upload($file);
        $categorie->setImgC($fileName);
        $categorie->setSlug($categorie->getLibelle());
        $doctrine = $this->getDoctrine()->getManager();

        // On hydrate notre instance $commentaire
        $doctrine->persist($categorie);

        // On écrit en base de données
        $doctrine->flush();
        return $this->redirectToRoute('list_categorie_cour');
    }
        return $this->render('admin/add/add_categorie.html.twig', [
            'categorieForm' => $form->createView(),
        ]);
}
    /**
     * @Route("/admin/categorie/delete/{id}", name="delete_categorie", methods={"GET"})
     */
    public function deletecategorie(Categorie $categorie)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($categorie);
        $em->flush();

        // redirige la page
        return $this->redirectToRoute('list_categorie_cour');
    }
    /**
 * @Route("/admin/categorie/modifier/{id}", name="modifier_categorie")
 */
public function editcategorie(Categorie $categorie, Request $request,FileUploader $fileUploader)
{

    $form = $this->createForm(EditcategorieType::class, $categorie);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $file = $categorie->getImgC();
        $fileName = $fileUploader->upload($file);
        $categorie->setImgC($fileName);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($categorie);
        $entityManager->flush();

        $this->addFlash('message', 'Utilisateur modifié avec succès');
        return $this->redirectToRoute('list_categorie_cour');
    }
    
    return $this->render('admin/edit/edit_categorie.html.twig', [
        'categorieForm' => $form->createView(),
    ]);
}
//............... Gestion Commande......................
    
     /**
     * @Route("/admin/commande", name="list_commande")
     * 
     */
    public function listercommande(CommandeRepository $commandeRepository)
    {
        $commande = $commandeRepository->findAll();
        return $this->render('admin/list/list_commande.html.twig', ['commande'=>$commande,
        
    ]);
}
    /**
     * @Route("/admin/commande/delete/{id}", name="delete_commande", methods={"GET"})
     */
    public function deletecommande(Commande $commande)
    {
        
        $em = $this->getDoctrine()->getManager();
        $em->remove($commande);
        $em->flush();

        // redirige la page
        return $this->redirectToRoute('list_commande');
    }
//.......................GESTION COMMENTAIRES.....................

     /**
     * @Route("/admin/commentaire", name="list_commentaire")
     * 
     */
    public function listercommentaire(CommentaireRepository $commentaireRepository)
    {
        $commentaire = $commentaireRepository->findAll();
        return $this->render('admin/list/list_commentaire.html.twig', ['commentaire'=>$commentaire,
        
    ]);
    }
    
    //....................gestion université......................

     /**
     * @Route("/admin/university", name="list_university")
     * 
     */
    public function listeruniversity(UniversiteRepository $universityRepository)
    {
        $university = $universityRepository->findAll();
        return $this->render('admin/list/list_university.html.twig', ['university'=>$university,
        
    ]);
    }

     /**
     * @Route("/admin/universite/delete/{id}", name="delete_universite", methods={"GET"})
     */
    public function deleteuniversite(Universite $universite)
    {
       
        $em = $this->getDoctrine()->getManager();
        $em->remove($universite);
        
        $em->flush();

        // redirige la page
        return $this->redirectToRoute('list_university');
    }
    /**
     * @Route("/admin/universite/add", name="add_universite", )
     */
    public function adduniversite( Request $request, FileUploader $fileUploader)
    {
        $universite = new universite();
        $form = $this->createForm(UniversityAddType::class, $universite);
       // Nous récupérons les données
        $form->handleRequest($request);

    // Nous vérifions si le formulaire a été soumis et si les données sont valides
    if ($form->isSubmitted() && $form->isValid()) {
        $universite->setSlug($universite->getNom());
        $doctrine = $this->getDoctrine()->getManager();

        // On hydrate notre instance $commentaire
        $doctrine->persist($universite);

        // On écrit en base de données
        $doctrine->flush();
        return $this->redirectToRoute('list_university');
    }
        return $this->render('admin/add/add_universite.html.twig', [
            'universiteForm' => $form->createView(),
        ]);
}

 //....................gestion Campagne......................

     /**
     * @Route("/admin/campagne", name="list_campagne")
     * 
     */
    public function listercampagne(CampagneRepository $campagneRepository)
    {
        $campagne = $campagneRepository->findAll();
        return $this->render('admin/list/list_campagne.html.twig', ['campagne'=>$campagne,
        
    ]);
    }
    /**
     * @Route("/admin/campagne/delete/{id}", name="delete_campagne", methods={"GET"})
     */
    public function deletecampagne(Campagne $campagne)
    {       
        $em = $this->getDoctrine()->getManager();
        $em->remove($campagne);        
        $em->flush();

        // redirige la page
        return $this->redirectToRoute('list_campagne');
    }
     

}