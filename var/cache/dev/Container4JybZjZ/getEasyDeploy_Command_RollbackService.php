<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'easy_deploy.command.rollback' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/easycorp/easy-deploy-bundle/src/Command/RollbackCommand.php';

$this->privates['easy_deploy.command.rollback'] = $instance = new \EasyCorp\Bundle\EasyDeployBundle\Command\RollbackCommand((($this->hasParameter("kernel.project_dir")) ? ($this->getParameter("kernel.project_dir")) : (($this->getParameter("kernel.root_dir") . "/.."))), ($this->targetDirs[2].'/log'));

$instance->setName('rollback');

return $instance;
