<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.tiPaFrB' shared service.

return $this->privates['.service_locator.tiPaFrB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'campagne' => ['privates', '.errored..service_locator.tiPaFrB.App\\Entity\\Campagne', NULL, 'Cannot autowire service ".service_locator.tiPaFrB": it references class "App\\Entity\\Campagne" but no such service exists.'],
]);
