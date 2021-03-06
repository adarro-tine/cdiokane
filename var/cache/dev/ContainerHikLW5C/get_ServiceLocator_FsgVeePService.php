<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.FsgVeeP' shared service.

return $this->privates['.service_locator.FsgVeeP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'campagnerepository' => ['privates', 'App\\Repository\\CampagneRepository', 'getCampagneRepositoryService.php', true],
    'categorierepository' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService.php', true],
    'chaprepo' => ['privates', 'App\\Repository\\ChapitreRepository', 'getChapitreRepositoryService.php', true],
    'cmdrepository' => ['privates', 'App\\Repository\\CommandeRepository', 'getCommandeRepositoryService.php', true],
    'commanderepository' => ['privates', 'App\\Repository\\CommandeRepository', 'getCommandeRepositoryService.php', true],
    'comrepo' => ['privates', 'App\\Repository\\CommentaireRepository', 'getCommentaireRepositoryService.php', true],
    'coursOnerepo' => ['privates', 'App\\Repository\\CoursRepository', 'getCoursRepositoryService.php', true],
    'fileUploader' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService.php', true],
    'scr' => ['privates', 'App\\Repository\\SousCategorieRepository', 'getSousCategorieRepositoryService.php', true],
]);
