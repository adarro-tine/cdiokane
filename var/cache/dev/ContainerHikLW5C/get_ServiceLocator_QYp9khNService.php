<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.qYp9khN' shared service.

return $this->privates['.service_locator.qYp9khN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'cours' => ['privates', '.errored..service_locator.qYp9khN.App\\Entity\\Cours', NULL, 'Cannot autowire service ".service_locator.qYp9khN": it references class "App\\Entity\\Cours" but no such service exists.'],
]);
