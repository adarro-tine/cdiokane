<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Formateur;
use App\Repository\UserRepository;
use App\Repository\CommandeRepository;
use App\Repository\FormateurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     * 
     */
    public function index()
    {


       if(!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
         throw new AccessDeniedException('acces limité aux admins ');
       }
       return $this->render('admin/index.html.twig', ['mainNavAdmin' => true, 'title' => 'Espace Admin']
        );
    }

    /**
     * @Route("/admin/users",name="admin_users")
     */
    public function tableUsersCommande(UserRepository $ur,CommandeRepository $commanderepository,FormateurRepository $formateurRepository){
    
    $users=$ur->findRoleUser();
    $commandes=$commanderepository->findAll();
    $formateurs=$formateurRepository->findAll();
    return $this->render('admin/tables_users.html.twig',['users'=>$users,
                                                        'commandes'=>$commandes,
                                                        'formateurs'=>$formateurs]);

    }

/**
 * @Route("/admin/{id<\d+>}/delete/user", name="delete", methods={"GET"})
 */
public function deleteUser(User $user)
{
    $em = $this->getDoctrine()->getManager();
    $em->remove($user);
    $em->flush();

    // redirige la page
    return $this->redirectToRoute('admin_users');
}

/**
 * @Route("/admin/{id<\d+>}/delete/formateur", name="delete_formateur", methods={"GET"})
 */
public function deleteFormateur(Formateur $formateur)
{
    $em = $this->getDoctrine()->getManager();
    $em->remove($formateur);
    $em->flush();
    // redirige la page
    return $this->redirectToRoute('admin_users');
}
}
