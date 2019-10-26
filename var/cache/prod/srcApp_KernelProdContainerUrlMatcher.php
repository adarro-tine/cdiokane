<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
            '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminController::tableUsersCommande'], null, null, null, false, false, null]],
            '/campagne' => [[['_route' => 'campagne', '_controller' => 'App\\Controller\\CampagneController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/all/campagnes' => [[['_route' => 'allcampagnes', '_controller' => 'App\\Controller\\CampagneController::allCampagnes'], null, null, null, false, false, null]],
            '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'cours', '_controller' => 'App\\Controller\\CoursController::allCours'], null, null, null, false, false, null]],
            '/mes-cours' => [[['_route' => 'mes-cours', '_controller' => 'App\\Controller\\CoursController::mesCours'], null, null, null, false, false, null]],
            '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\CoursController::searchAction'], null, null, null, false, false, null]],
            '/new' => [[['_route' => 'new', '_controller' => 'App\\Controller\\CoursController::index2'], null, null, null, false, false, null]],
            '/donate' => [[['_route' => 'donate', '_controller' => 'App\\Controller\\DonController::index'], null, null, null, false, false, null]],
            '/panier' => [[['_route' => 'page_panier', '_controller' => 'App\\Controller\\PanierController::panier'], null, null, null, false, false, null]],
            '/menu' => [[['_route' => 'page_menu', '_controller' => 'App\\Controller\\PanierController::menu'], null, null, null, false, false, null]],
            '/facture' => [[['_route' => 'facture', '_controller' => 'App\\Controller\\PanierController::facture'], null, null, null, false, false, null]],
            '/valider' => [[['_route' => 'valider_commande', '_controller' => 'App\\Controller\\PanierController::validerCommande'], null, null, null, false, false, null]],
            '/poste' => [[['_route' => 'poste', '_controller' => 'App\\Controller\\PosteController::poste'], null, null, null, false, false, null]],
            '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
            '/edit/photo/profil' => [[['_route' => 'edit_photo', '_controller' => 'App\\Controller\\RegistrationController::editPhoto'], null, null, null, false, false, null]],
            '/tabs' => [[['_route' => 'tabs', '_controller' => 'App\\Controller\\RegistrationController::tabs'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
            '/forgotten_password' => [[['_route' => 'app_forgotten_password', '_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], null, null, null, false, false, null]],
            '/email' => [[['_route' => 'email', '_controller' => 'App\\Controller\\SecurityController::test'], null, null, null, false, false, null]],
            '/security_logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/admin/(?'
                        .'|(\\d+)/delete/user(*:34)'
                        .'|(\\d+)/delete/formateur(*:63)'
                    .')'
                    .'|/c(?'
                        .'|a(?'
                            .'|mpagne/user/([^/]++)(*:100)'
                            .'|tegories/([^/]++)(*:125)'
                        .')'
                        .'|our/([^/]++)(*:146)'
                    .')'
                    .'|/s(?'
                        .'|ous\\-categorie/([^/]++)(*:183)'
                        .'|howCommande/([^/]++)(*:211)'
                    .')'
                    .'|/mes\\-cours/([^/]++)(*:240)'
                    .'|/([^/]++)/traduction/([^/]++)(*:277)'
                    .'|/donateur/([^/]++)/new(*:307)'
                    .'|/ajout_panier/([^/]++)(*:337)'
                    .'|/supprimer/([^/]++)(*:364)'
                    .'|/chapitres/([^/]++)(*:391)'
                    .'|/poste/([^/]++)(?'
                        .'|(*:417)'
                        .'|/new(*:429)'
                    .')'
                    .'|/edit/([^/]++)/user(*:457)'
                    .'|/reset_password/([^/]++)(*:489)'
                    .'|/([^/]++)(*:506)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            34 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], ['GET' => 0], null, false, false, null]],
            63 => [[['_route' => 'delete_formateur', '_controller' => 'App\\Controller\\AdminController::deleteFormateur'], ['id'], ['GET' => 0], null, false, false, null]],
            100 => [[['_route' => 'campagneUser', '_controller' => 'App\\Controller\\CampagneController::campagneUser'], ['slug'], null, null, false, true, null]],
            125 => [[['_route' => 'page_produitsByCategory', '_controller' => 'App\\Controller\\CoursController::findOneCoursCategorie'], ['slug'], null, null, false, true, null]],
            146 => [[['_route' => 'cour', '_controller' => 'App\\Controller\\CoursController::findOneCour'], ['slug'], null, null, false, true, null]],
            183 => [[['_route' => 'souscategorie', '_controller' => 'App\\Controller\\CoursController::findCoursOneSousCategorie'], ['slug'], null, null, false, true, null]],
            211 => [[['_route' => 'show_commande', '_controller' => 'App\\Controller\\CoursController::finaliserCommande'], ['slug'], ['GET' => 0], null, false, true, null]],
            240 => [[['_route' => 'mes-cours-slug', '_controller' => 'App\\Controller\\CoursController::findOneCourCommande'], ['slug'], null, null, false, true, null]],
            277 => [[['_route' => 'app_cours_translation', '_controller' => 'App\\Controller\\CoursController::translationAction'], ['_locale', 'name'], null, null, false, true, null]],
            307 => [[['_route' => 'donateur', '_controller' => 'App\\Controller\\DonController::donateur'], ['slug'], null, null, false, false, null]],
            337 => [[['_route' => 'page_ajouterPanier', '_controller' => 'App\\Controller\\PanierController::ajoutPanier'], ['id'], null, null, false, true, null]],
            364 => [[['_route' => 'page_supprimerPanier', '_controller' => 'App\\Controller\\PanierController::supprimerAction'], ['id'], null, null, false, true, null]],
            391 => [[['_route' => 'chapitres_complet', '_controller' => 'App\\Controller\\PanierController::chapitresComplet'], ['slug'], null, null, false, true, null]],
            417 => [[['_route' => 'poste_slug', '_controller' => 'App\\Controller\\PosteController::findOnePoste'], ['slug'], null, null, false, true, null]],
            429 => [[['_route' => 'inscription_formateur', '_controller' => 'App\\Controller\\PosteController::RegisterFormateur'], ['slug'], null, null, false, false, null]],
            457 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\RegistrationController::editAction'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            489 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
            506 => [[['_route' => 'allCours', '_controller' => 'App\\Controller\\CoursController::allCours'], ['_locale'], null, null, false, true, null]],
        ];
    }
}
