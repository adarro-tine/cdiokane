<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.tCcyqiW' shared service.

return $this->privates['.service_locator.tCcyqiW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'campagne' => ['privates', 'App\\Repository\\CampagneRepository', 'getCampagneRepositoryService.php', true],
    'comrepo' => ['privates', 'App\\Repository\\CommentaireRepository', 'getCommentaireRepositoryService.php', true],
    'cr' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService.php', true],
    'poste' => ['privates', '.errored..service_locator.tCcyqiW.App\\Entity\\Poste', NULL, 'Cannot autowire service ".service_locator.tCcyqiW": it references class "App\\Entity\\Poste" but no such service exists.'],
    'posterepo' => ['privates', 'App\\Repository\\PosteRepository', 'getPosteRepositoryService.php', true],
    'scr' => ['privates', 'App\\Repository\\SousCategorieRepository', 'getSousCategorieRepositoryService.php', true],
]);
