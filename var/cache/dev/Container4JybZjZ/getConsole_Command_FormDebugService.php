<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Command/DebugCommand.php';

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->load('getForm_RegistryService.php')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type'], [0 => 'App\\Form\\AddCategorieType', 1 => 'App\\Form\\AddChapitreType', 2 => 'App\\Form\\AddCoursType', 3 => 'App\\Form\\AddUserType', 4 => 'App\\Form\\AddcommentaireType', 5 => 'App\\Form\\CampagneType', 6 => 'App\\Form\\CommandeType', 7 => 'App\\Form\\ContactType', 8 => 'App\\Form\\DonateType', 9 => 'App\\Form\\EditCommandeType', 10 => 'App\\Form\\EditCourType', 11 => 'App\\Form\\EditType', 12 => 'App\\Form\\EditcampagneType', 13 => 'App\\Form\\EditcategorieType', 14 => 'App\\Form\\EditchapitreType', 15 => 'App\\Form\\FormateurType', 16 => 'App\\Form\\ProjetType', 17 => 'App\\Form\\RechercheType', 18 => 'App\\Form\\UniversityAddType', 19 => 'App\\Form\\UserEditPhotoType', 20 => 'App\\Form\\UserType', 21 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 22 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 23 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 24 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser']);

$instance->setName('debug:form');

return $instance;
