<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.orm.default_entity_manager' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManager.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/PruneableInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/ResettableInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/cache/DoctrineProvider.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriverChain.php';
include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';

$a = new \Doctrine\ORM\Configuration();

$b = new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.system_cache_pool'] ?? $this->load('getDoctrine_SystemCachePoolService.php')));
$c = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
$c->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => ($this->targetDirs[3].'/src/Entity')]), 'App\\Entity');

$a->setEntityNamespaces(['App' => 'App\\Entity']);
$a->setMetadataCacheImpl($b);
$a->setQueryCacheImpl($b);
$a->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->privates['doctrine.result_cache_pool'] ?? $this->load('getDoctrine_ResultCachePoolService.php'))));
$a->setMetadataDriverImpl($c);
$a->setProxyDir(($this->targetDirs[0].'/doctrine/orm/Proxies'));
$a->setProxyNamespace('Proxies');
$a->setAutoGenerateProxyClasses(false);
$a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
$a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
$a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
$a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
$a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
$a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Repository\\AddCoursRepository' => ['privates', 'App\\Repository\\AddCoursRepository', 'getAddCoursRepositoryService.php', true],
    'App\\Repository\\CampagneRepository' => ['privates', 'App\\Repository\\CampagneRepository', 'getCampagneRepositoryService.php', true],
    'App\\Repository\\CategorieRepository' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService.php', true],
    'App\\Repository\\ChapitreRepository' => ['privates', 'App\\Repository\\ChapitreRepository', 'getChapitreRepositoryService.php', true],
    'App\\Repository\\CommandeRepository' => ['privates', 'App\\Repository\\CommandeRepository', 'getCommandeRepositoryService.php', true],
    'App\\Repository\\CommentaireRepository' => ['privates', 'App\\Repository\\CommentaireRepository', 'getCommentaireRepositoryService.php', true],
    'App\\Repository\\ContactRepository' => ['privates', 'App\\Repository\\ContactRepository', 'getContactRepositoryService.php', true],
    'App\\Repository\\CoursRepository' => ['privates', 'App\\Repository\\CoursRepository', 'getCoursRepositoryService.php', true],
    'App\\Repository\\CursusRepository' => ['privates', 'App\\Repository\\CursusRepository', 'getCursusRepositoryService.php', true],
    'App\\Repository\\DateRepository' => ['privates', 'App\\Repository\\DateRepository', 'getDateRepositoryService.php', true],
    'App\\Repository\\DonRepository' => ['privates', 'App\\Repository\\DonRepository', 'getDonRepositoryService.php', true],
    'App\\Repository\\DonateurRepository' => ['privates', 'App\\Repository\\DonateurRepository', 'getDonateurRepositoryService.php', true],
    'App\\Repository\\DonationRepository' => ['privates', 'App\\Repository\\DonationRepository', 'getDonationRepositoryService.php', true],
    'App\\Repository\\FormateurRepository' => ['privates', 'App\\Repository\\FormateurRepository', 'getFormateurRepositoryService.php', true],
    'App\\Repository\\NomRepository' => ['privates', 'App\\Repository\\NomRepository', 'getNomRepositoryService.php', true],
    'App\\Repository\\PosteRepository' => ['privates', 'App\\Repository\\PosteRepository', 'getPosteRepositoryService.php', true],
    'App\\Repository\\ProjetRepository' => ['privates', 'App\\Repository\\ProjetRepository', 'getProjetRepositoryService.php', true],
    'App\\Repository\\RoleRepository' => ['privates', 'App\\Repository\\RoleRepository', 'getRoleRepositoryService.php', true],
    'App\\Repository\\SousCategorieRepository' => ['privates', 'App\\Repository\\SousCategorieRepository', 'getSousCategorieRepositoryService.php', true],
    'App\\Repository\\UniversiteRepository' => ['privates', 'App\\Repository\\UniversiteRepository', 'getUniversiteRepositoryService.php', true],
    'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
])));

$this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->load('getDoctrine_Dbal_DefaultConnectionService.php')), $a);

(new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

return $instance;
