<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.MZpljm7' shared service.

return $this->privates['.service_locator.MZpljm7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'categorie' => ['privates', '.errored..service_locator.MZpljm7.App\\Entity\\Categorie', NULL, 'Cannot autowire service ".service_locator.MZpljm7": it references class "App\\Entity\\Categorie" but no such service exists.'],
    'fileUploader' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService.php', true],
]);
