<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
            '/admin/utilisateurs/add' => [[['_route' => 'add_utilisateur', '_controller' => 'App\\Controller\\AdminController::addUser'], null, null, null, false, false, null]],
            '/admin/chapitre' => [[['_route' => 'list_chapitre', '_controller' => 'App\\Controller\\AdminController::listerchapitre'], null, null, null, false, false, null]],
            '/admin/chapitre/add' => [[['_route' => 'add_chapitre', '_controller' => 'App\\Controller\\AdminController::addchapitre'], null, null, null, false, false, null]],
            '/admin/cours' => [[['_route' => 'list_cour', '_controller' => 'App\\Controller\\AdminController::listercours'], null, null, null, false, false, null]],
            '/admin/cour/add' => [[['_route' => 'add_cour', '_controller' => 'App\\Controller\\AdminController::addcour'], null, null, null, false, false, null]],
            '/admin/categorie' => [[['_route' => 'list_categorie_cour', '_controller' => 'App\\Controller\\AdminController::listercategorie'], null, null, null, false, false, null]],
            '/admin/categorie/add' => [[['_route' => 'add_categorie', '_controller' => 'App\\Controller\\AdminController::addcategorie'], null, null, null, false, false, null]],
            '/admin/commande' => [[['_route' => 'list_commande', '_controller' => 'App\\Controller\\AdminController::listercommande'], null, null, null, false, false, null]],
            '/admin/commentaire' => [[['_route' => 'list_commentaire', '_controller' => 'App\\Controller\\AdminController::listercommentaire'], null, null, null, false, false, null]],
            '/admin/university' => [[['_route' => 'list_university', '_controller' => 'App\\Controller\\AdminController::listeruniversity'], null, null, null, false, false, null]],
            '/admin/universite/add' => [[['_route' => 'add_universite', '_controller' => 'App\\Controller\\AdminController::adduniversite'], null, null, null, false, false, null]],
            '/admin/campagne' => [[['_route' => 'list_campagne', '_controller' => 'App\\Controller\\AdminController::listercampagne'], null, null, null, false, false, null]],
            '/campagne' => [[['_route' => 'campagne', '_controller' => 'App\\Controller\\CampagneController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/all/campagnes' => [[['_route' => 'allcampagnes', '_controller' => 'App\\Controller\\CampagneController::allCampagnes'], null, null, null, false, false, null]],
            '/demarrer' => [[['_route' => 'demarrer', '_controller' => 'App\\Controller\\CampagneController::demarrerCampagne'], null, null, null, false, false, null]],
            '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'cours', '_controller' => 'App\\Controller\\CoursController::allCours'], null, null, null, false, false, null]],
            '/mes-cours' => [[['_route' => 'mes-cours', '_controller' => 'App\\Controller\\CoursController::mesCours'], null, null, null, false, false, null]],
            '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\CoursController::searchAction'], null, null, null, false, false, null]],
            '/new' => [[['_route' => 'new', '_controller' => 'App\\Controller\\CoursController::index2'], null, null, null, false, false, null]],
            '/commentaire/add' => [[['_route' => 'add_commentaire', '_controller' => 'App\\Controller\\CoursController::addcommentaire'], null, null, null, false, false, null]],
            '/donate' => [[['_route' => 'donate', '_controller' => 'App\\Controller\\DonController::index'], null, null, null, false, false, null]],
            '/formation' => [[['_route' => 'formation', '_controller' => 'App\\Controller\\FormationController::index'], null, null, null, false, false, null]],
            '/panier' => [[['_route' => 'page_panier', '_controller' => 'App\\Controller\\PanierController::panier'], null, null, null, false, false, null]],
            '/menu' => [[['_route' => 'page_menu', '_controller' => 'App\\Controller\\PanierController::menu'], null, null, null, false, false, null]],
            '/facture' => [[['_route' => 'facture', '_controller' => 'App\\Controller\\PanierController::facture'], null, null, null, false, false, null]],
            '/valider' => [[['_route' => 'valider_commande', '_controller' => 'App\\Controller\\PanierController::validerCommande'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
            '/poste' => [[['_route' => 'poste', '_controller' => 'App\\Controller\\PosteController::poste'], null, null, null, false, false, null]],
            '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
            '/edit/photo/profil' => [[['_route' => 'edit_photo', '_controller' => 'App\\Controller\\RegistrationController::editPhoto'], null, null, null, false, false, null]],
            '/tabs' => [[['_route' => 'tabs', '_controller' => 'App\\Controller\\RegistrationController::tabs'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
            '/forgotten_password' => [[['_route' => 'app_forgotten_password', '_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], null, null, null, false, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/security_logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/admin/(?'
                        .'|u(?'
                            .'|tilisateurs/(?'
                                .'|modifier/([^/]++)(*:53)'
                                .'|delete/([^/]++)(*:75)'
                            .')'
                            .'|niversite/delete/([^/]++)(*:108)'
                        .')'
                        .'|c(?'
                            .'|hapitre/(?'
                                .'|delete/([^/]++)(*:147)'
                                .'|modifier/([^/]++)(*:172)'
                            .')'
                            .'|o(?'
                                .'|urs/(?'
                                    .'|modifier/([^/]++)(*:209)'
                                    .'|delete/([^/]++)(*:232)'
                                .')'
                                .'|mmande/delete/([^/]++)(*:263)'
                            .')'
                            .'|a(?'
                                .'|tegorie/(?'
                                    .'|delete/([^/]++)(*:302)'
                                    .'|modifier/([^/]++)(*:327)'
                                .')'
                                .'|mpagne/delete/([^/]++)(*:358)'
                            .')'
                        .')'
                    .')'
                    .'|/c(?'
                        .'|a(?'
                            .'|mpagne/user/([^/]++)(*:398)'
                            .'|tegories/([^/]++)(*:423)'
                        .')'
                        .'|our/([^/]++)(*:444)'
                    .')'
                    .'|/s(?'
                        .'|ous\\-categorie/([^/]++)(*:481)'
                        .'|howCommande/([^/]++)(*:509)'
                    .')'
                    .'|/mes\\-cours/([^/]++)(*:538)'
                    .'|/([^/]++)/traduction/([^/]++)(*:575)'
                    .'|/donateur/([^/]++)/new(*:605)'
                    .'|/formation/([^/]++)(*:632)'
                    .'|/ajout_panier/([^/]++)(*:662)'
                    .'|/supprimer/([^/]++)(*:689)'
                    .'|/chapitres/([^/]++)(*:716)'
                    .'|/poste/([^/]++)(?'
                        .'|(*:742)'
                        .'|/new(*:754)'
                    .')'
                    .'|/edit/([^/]++)/user(*:782)'
                    .'|/reset_password/([^/]++)(*:814)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:853)'
                        .'|wdt/([^/]++)(*:873)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:919)'
                                .'|router(*:933)'
                                .'|exception(?'
                                    .'|(*:953)'
                                    .'|\\.css(*:966)'
                                .')'
                            .')'
                            .'|(*:976)'
                        .')'
                    .')'
                    .'|/([^/]++)(*:995)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            53 => [[['_route' => 'modifier_utilisateur', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, true, null]],
            75 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], ['GET' => 0], null, false, true, null]],
            108 => [[['_route' => 'delete_universite', '_controller' => 'App\\Controller\\AdminController::deleteuniversite'], ['id'], ['GET' => 0], null, false, true, null]],
            147 => [[['_route' => 'delete_chapitre', '_controller' => 'App\\Controller\\AdminController::deletechapitre'], ['id'], ['GET' => 0], null, false, true, null]],
            172 => [[['_route' => 'modifier_chapitre', '_controller' => 'App\\Controller\\AdminController::editchapitre'], ['id'], null, null, false, true, null]],
            209 => [[['_route' => 'modifier_cour', '_controller' => 'App\\Controller\\AdminController::editCour'], ['id'], null, null, false, true, null]],
            232 => [[['_route' => 'delete_cour', '_controller' => 'App\\Controller\\AdminController::deletecour'], ['id'], ['GET' => 0], null, false, true, null]],
            263 => [[['_route' => 'delete_commande', '_controller' => 'App\\Controller\\AdminController::deletecommande'], ['id'], ['GET' => 0], null, false, true, null]],
            302 => [[['_route' => 'delete_categorie', '_controller' => 'App\\Controller\\AdminController::deletecategorie'], ['id'], ['GET' => 0], null, false, true, null]],
            327 => [[['_route' => 'modifier_categorie', '_controller' => 'App\\Controller\\AdminController::editcategorie'], ['id'], null, null, false, true, null]],
            358 => [[['_route' => 'delete_campagne', '_controller' => 'App\\Controller\\AdminController::deletecampagne'], ['id'], ['GET' => 0], null, false, true, null]],
            398 => [[['_route' => 'campagneUser', '_controller' => 'App\\Controller\\CampagneController::campagneUser'], ['slug'], null, null, false, true, null]],
            423 => [[['_route' => 'page_produitsByCategory', '_controller' => 'App\\Controller\\CoursController::findOneCoursCategorie'], ['slug'], null, null, false, true, null]],
            444 => [[['_route' => 'cour', '_controller' => 'App\\Controller\\CoursController::findOneCour'], ['slug'], null, null, false, true, null]],
            481 => [[['_route' => 'souscategorie', '_controller' => 'App\\Controller\\CoursController::findCoursOneSousCategorie'], ['slug'], null, null, false, true, null]],
            509 => [[['_route' => 'show_commande', '_controller' => 'App\\Controller\\CoursController::finaliserCommande'], ['slug'], ['GET' => 0], null, false, true, null]],
            538 => [[['_route' => 'mes-cours-slug', '_controller' => 'App\\Controller\\CoursController::findOneCourCommande'], ['slug'], null, null, false, true, null]],
            575 => [[['_route' => 'app_cours_translation', '_controller' => 'App\\Controller\\CoursController::translationAction'], ['_locale', 'name'], null, null, false, true, null]],
            605 => [[['_route' => 'donateur', '_controller' => 'App\\Controller\\DonController::donateur'], ['slug'], null, null, false, false, null]],
            632 => [[['_route' => 'parcour', '_controller' => 'App\\Controller\\FormationController::parcour'], ['slug'], null, null, false, true, null]],
            662 => [[['_route' => 'page_ajouterPanier', '_controller' => 'App\\Controller\\PanierController::ajoutPanier'], ['id'], null, null, false, true, null]],
            689 => [[['_route' => 'page_supprimerPanier', '_controller' => 'App\\Controller\\PanierController::supprimerAction'], ['id'], null, null, false, true, null]],
            716 => [[['_route' => 'chapitres_complet', '_controller' => 'App\\Controller\\PanierController::chapitresComplet'], ['slug'], null, null, false, true, null]],
            742 => [[['_route' => 'poste_slug', '_controller' => 'App\\Controller\\PosteController::findOnePoste'], ['slug'], null, null, false, true, null]],
            754 => [[['_route' => 'inscription_formateur', '_controller' => 'App\\Controller\\PosteController::RegisterFormateur'], ['slug'], null, null, false, false, null]],
            782 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\RegistrationController::editAction'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            814 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
            853 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            873 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            919 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            933 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            953 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            966 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            976 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            995 => [[['_route' => 'allCours', '_controller' => 'App\\Controller\\CoursController::allCours'], ['_locale'], null, null, false, true, null]],
        ];
    }
}
