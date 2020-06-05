<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\SousCategorieRepository;
use App\Repository\CategorieRepository;
use App\Repository\CommentaireRepository;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CoursRepository;
use App\Repository\ChapitreRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;


class FormationController extends AbstractController
{
    /**
     * @Route("/formation", name="formation")
     */
    public function index(CoursRepository $cour,CategorieRepository $cateRepo,SousCategorieRepository $souscatrepo,CommentaireRepository $commentrepo,PaginatorInterface $paginator,Request $request) 
    {
        $formation = $cour->findBy(['visibilite'=>2]);
        $formatGratuit = $cour->findBy(['visibilite'=>0]);
        $product = $cour->findBy(['visibilite'=>1]);
        $allCours = $paginator->paginate(
            $product,
            $request->query->getInt('page', 1),
            3
        );
        $categories = $cateRepo->findAll();
        $souscategories = $souscatrepo->findAll();
        $commentaires= $commentrepo->findAll();
        return $this->render('formation/index.html.twig', [
            'controller_name' => 'FormationController',
            'formation'=>$formation,
            'parcourgratuit'=>$formatGratuit,
            'categories'=>$categories,
            'souscategories'=>$souscategories,
            'commentaires'=>$commentaires,
            'produits' => $allCours,
        ]);
    }
        /**
     * @Route("/formation/{slug}", name="parcour")
     */
    public function parcour(CoursRepository $parcour,$slug,ChapitreRepository $chapitre) 
    {
        $parcourID = $parcour->findOneBy(['slug'=> $slug]);
        $IDCour =  $parcourID->getId();
        $chapitre = $chapitre->chapitreByCour($IDCour);
        $coursSimilaire = $parcour->findBy(['visibilite'=>0]);
            
        return $this->render('formation/parcour.html.twig', [
            'parcour' => $parcourID,'chapitre'=>$chapitre,'coursSimilaire'=>$coursSimilaire,
        ]);
    }
}
