<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
        'admin_users' => [[], ['_controller' => 'App\\Controller\\AdminController::tableUsersCommande'], [], [['text', '/admin/users']], [], []],
        'delete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id' => '\\d+'], [['text', '/delete/user'], ['variable', '/', '\\d+', 'id', true], ['text', '/admin']], [], []],
        'delete_formateur' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteFormateur'], ['id' => '\\d+'], [['text', '/delete/formateur'], ['variable', '/', '\\d+', 'id', true], ['text', '/admin']], [], []],
        'campagne' => [[], ['_controller' => 'App\\Controller\\CampagneController::index'], [], [['text', '/campagne']], [], []],
        'allcampagnes' => [[], ['_controller' => 'App\\Controller\\CampagneController::allCampagnes'], [], [['text', '/all/campagnes']], [], []],
        'campagneUser' => [['slug'], ['_controller' => 'App\\Controller\\CampagneController::campagneUser'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/campagne/user']], [], []],
        'demarrer' => [[], ['_controller' => 'App\\Controller\\CampagneController::demarrerCampagne'], [], [['text', '/demarrer']], [], []],
        'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], []],
        'cours' => [[], ['_controller' => 'App\\Controller\\CoursController::allCours'], [], [['text', '/']], [], []],
        'cour' => [['slug'], ['_controller' => 'App\\Controller\\CoursController::findOneCour'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/cour']], [], []],
        'page_produitsByCategory' => [['slug'], ['_controller' => 'App\\Controller\\CoursController::findOneCoursCategorie'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/categories']], [], []],
        'souscategorie' => [['slug'], ['_controller' => 'App\\Controller\\CoursController::findCoursOneSousCategorie'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/sous-categorie']], [], []],
        'mes-cours' => [[], ['_controller' => 'App\\Controller\\CoursController::mesCours'], [], [['text', '/mes-cours']], [], []],
        'mes-cours-slug' => [['slug'], ['_controller' => 'App\\Controller\\CoursController::findOneCourCommande'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/mes-cours']], [], []],
        'show_commande' => [['slug'], ['_controller' => 'App\\Controller\\CoursController::finaliserCommande'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/showCommande']], [], []],
        'search' => [[], ['_controller' => 'App\\Controller\\CoursController::searchAction'], [], [['text', '/search']], [], []],
        'app_cours_translation' => [['_locale', 'name'], ['_controller' => 'App\\Controller\\CoursController::translationAction'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/traduction'], ['variable', '/', '[^/]++', '_locale', true]], [], []],
        'new' => [[], ['_controller' => 'App\\Controller\\CoursController::index2'], [], [['text', '/new']], [], []],
        'donate' => [[], ['_controller' => 'App\\Controller\\DonController::index'], [], [['text', '/donate']], [], []],
        'donateur' => [['slug'], ['_controller' => 'App\\Controller\\DonController::donateur'], [], [['text', '/new'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/donateur']], [], []],
        'page_panier' => [[], ['_controller' => 'App\\Controller\\PanierController::panier'], [], [['text', '/panier']], [], []],
        'page_ajouterPanier' => [['id'], ['_controller' => 'App\\Controller\\PanierController::ajoutPanier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/ajout_panier']], [], []],
        'page_menu' => [[], ['_controller' => 'App\\Controller\\PanierController::menu'], [], [['text', '/menu']], [], []],
        'facture' => [[], ['_controller' => 'App\\Controller\\PanierController::facture'], [], [['text', '/facture']], [], []],
        'valider_commande' => [[], ['_controller' => 'App\\Controller\\PanierController::validerCommande'], [], [['text', '/valider']], [], []],
        'page_supprimerPanier' => [['id'], ['_controller' => 'App\\Controller\\PanierController::supprimerAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/supprimer']], [], []],
        'chapitres_complet' => [['slug'], ['_controller' => 'App\\Controller\\PanierController::chapitresComplet'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/chapitres']], [], []],
        'poste' => [[], ['_controller' => 'App\\Controller\\PosteController::poste'], [], [['text', '/poste']], [], []],
        'poste_slug' => [['slug'], ['_controller' => 'App\\Controller\\PosteController::findOnePoste'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/poste']], [], []],
        'inscription_formateur' => [['slug'], ['_controller' => 'App\\Controller\\PosteController::RegisterFormateur'], [], [['text', '/new'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/poste']], [], []],
        'registration' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/registration']], [], []],
        'edit' => [['slug'], ['_controller' => 'App\\Controller\\RegistrationController::editAction'], [], [['text', '/user'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/edit']], [], []],
        'edit_photo' => [[], ['_controller' => 'App\\Controller\\RegistrationController::editPhoto'], [], [['text', '/edit/photo/profil']], [], []],
        'tabs' => [[], ['_controller' => 'App\\Controller\\RegistrationController::tabs'], [], [['text', '/tabs']], [], []],
        'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
        'security_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
        'app_forgotten_password' => [[], ['_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], [], [['text', '/forgotten_password']], [], []],
        'app_reset_password' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::resetPassword'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset_password']], [], []],
        'email' => [[], ['_controller' => 'App\\Controller\\SecurityController::test'], [], [['text', '/email']], [], []],
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'logout' => [[], [], [], [['text', '/security_logout']], [], []],
        'allCours' => [['_locale'], ['_controller' => 'App\\Controller\\CoursController::allCours'], [], [['variable', '/', '[^/]++', '_locale', true]], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
