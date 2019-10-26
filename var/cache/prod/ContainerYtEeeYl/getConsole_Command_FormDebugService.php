<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Command/DebugCommand.php';

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->load('getForm_RegistryService.php')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => ''], [0 => 'App\\Form\\AddCoursType', 1 => 'App\\Form\\CampagneType', 2 => 'App\\Form\\CommandeType', 3 => 'App\\Form\\ContactType', 4 => 'App\\Form\\DonationType', 5 => 'App\\Form\\FormateurType', 6 => 'App\\Form\\ProjetType', 7 => 'App\\Form\\RechercheType', 8 => 'App\\Form\\UserEditPhotoType', 9 => 'App\\Form\\UserType', 10 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 11 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 12 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 13 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 14 => 'PUGX\\AutocompleterBundle\\Form\\Type\\AutocompleteType', 15 => 'PUGX\\AutocompleterBundle\\Form\\Type\\AutocompleteFilterType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser']);

$instance->setName('debug:form');

return $instance;
