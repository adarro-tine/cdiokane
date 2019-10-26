<?php

namespace App\Controller;
use App\Form\ContactType;
use App\Entity\Contact;
use App\Repository\CampagneRepository;
use App\Repository\CategorieRepository; 
use App\Repository\SousCategorieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, \Swift_Mailer $mailer,CategorieRepository $cr,SousCategorieRepository $scr,CampagneRepository $campagnerepository)
    {
        $contact = new Contact();
        $categories = $cr->findAll();
        $souscategories = $scr->findAll();
        $campagnes = $campagnerepository->findAll();
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
           $this->addFlash('info', 'Quelques informations utiles');

           if($form->isSubmitted() &&  $form->isValid()){
            $nom = $form['nom']->getData();
            $email = $form['email']->getData();
            $subject = $form['objet']->getData();
            $message = $form['message']->getData(); 
            $contact->setNom($nom);
            $contact->setEmail($email);          
            $contact->setObjet($subject);     
            $contact->setMessage($message);                
            $sn = $this->getDoctrine()->getManager();      
            $sn->persist($contact);
            $sn->flush();
            //configuration swit mailler
           /* $message = (new \Swift_Message('Nouveau message de contact!'))
            ->setFrom('crowdedu.edu@gmail.com')
            ->setTo($email)
            ->setBody($this->renderView('contact/sendemail.html.twig',array('nom' => $nom)),'text/html');*/
            $message = (new \Swift_Message('Nouveau message de contact'))
                ->setFrom('crowdedu.edu@gmail.com')
                ->setTo($email)
                ->setBody(
                    $this->renderView(
                        'contact/sendemail.html.twig',
                        [
                            'nom' => $nom
                        ]
                    ),
                    'text/html'
                )
            ;

            $mailer->send($message);
           $this->addFlash('success', 'Votre message a été envoyé, vous allez recevoir un mail de confirmation');

          return $this->redirectToRoute('contact');
           }

        return $this->render('contact/index.html.twig', [
          'our_form' => $form->createView(),
          'categories'=>$categories,
          'souscategories'=>$souscategories,
          'campagnes'=>$campagnes
        ]);
    }
}
