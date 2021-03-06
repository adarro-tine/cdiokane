<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.DEVOM3r' shared service.

return $this->privates['.service_locator.DEVOM3r'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'campagnerepository' => ['privates', 'App\\Repository\\CampagneRepository', 'getCampagneRepositoryService.php', true],
    'cr' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService.php', true],
    'personne' => ['privates', '.errored..service_locator.DEVOM3r.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.DEVOM3r": it references class "App\\Entity\\User" but no such service exists.'],
    'scr' => ['privates', 'App\\Repository\\SousCategorieRepository', 'getSousCategorieRepositoryService.php', true],
    'userrepo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
]);
