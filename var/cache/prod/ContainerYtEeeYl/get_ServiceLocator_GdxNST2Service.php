<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.GdxNST2' shared service.

return $this->privates['.service_locator.GdxNST2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'coursrepo' => ['privates', 'App\\Repository\\CoursRepository', 'getCoursRepositoryService.php', true],
]);
