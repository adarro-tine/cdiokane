<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.registry' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/FormRegistry.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/FormExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/ResolvedFormTypeFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Extension/DataCollector/Proxy/ResolvedTypeFactoryDataCollectorProxy.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/ResolvedFormTypeFactory.php';

return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Form\\AddCategorieType' => ['privates', 'App\\Form\\AddCategorieType', 'getAddCategorieTypeService.php', true],
    'App\\Form\\AddChapitreType' => ['privates', 'App\\Form\\AddChapitreType', 'getAddChapitreTypeService.php', true],
    'App\\Form\\AddCoursType' => ['privates', 'App\\Form\\AddCoursType', 'getAddCoursTypeService.php', true],
    'App\\Form\\AddUserType' => ['privates', 'App\\Form\\AddUserType', 'getAddUserTypeService.php', true],
    'App\\Form\\AddcommentaireType' => ['privates', 'App\\Form\\AddcommentaireType', 'getAddcommentaireTypeService.php', true],
    'App\\Form\\CampagneType' => ['privates', 'App\\Form\\CampagneType', 'getCampagneTypeService.php', true],
    'App\\Form\\CommandeType' => ['privates', 'App\\Form\\CommandeType', 'getCommandeTypeService.php', true],
    'App\\Form\\ContactType' => ['privates', 'App\\Form\\ContactType', 'getContactTypeService.php', true],
    'App\\Form\\DonateType' => ['privates', 'App\\Form\\DonateType', 'getDonateTypeService.php', true],
    'App\\Form\\EditCommandeType' => ['privates', 'App\\Form\\EditCommandeType', 'getEditCommandeTypeService.php', true],
    'App\\Form\\EditCourType' => ['privates', 'App\\Form\\EditCourType', 'getEditCourTypeService.php', true],
    'App\\Form\\EditType' => ['privates', 'App\\Form\\EditType', 'getEditTypeService.php', true],
    'App\\Form\\EditcampagneType' => ['privates', 'App\\Form\\EditcampagneType', 'getEditcampagneTypeService.php', true],
    'App\\Form\\EditcategorieType' => ['privates', 'App\\Form\\EditcategorieType', 'getEditcategorieTypeService.php', true],
    'App\\Form\\EditchapitreType' => ['privates', 'App\\Form\\EditchapitreType', 'getEditchapitreTypeService.php', true],
    'App\\Form\\FormateurType' => ['privates', 'App\\Form\\FormateurType', 'getFormateurTypeService.php', true],
    'App\\Form\\ProjetType' => ['privates', 'App\\Form\\ProjetType', 'getProjetTypeService.php', true],
    'App\\Form\\RechercheType' => ['privates', 'App\\Form\\RechercheType', 'getRechercheTypeService.php', true],
    'App\\Form\\UniversityAddType' => ['privates', 'App\\Form\\UniversityAddType', 'getUniversityAddTypeService.php', true],
    'App\\Form\\UserEditPhotoType' => ['privates', 'App\\Form\\UserEditPhotoType', 'getUserEditPhotoTypeService.php', true],
    'App\\Form\\UserType' => ['privates', 'App\\Form\\UserType', 'getUserTypeService.php', true],
    'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService.php', true],
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService.php', true],
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService.php', true],
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService.php', true],
]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? $this->load('getForm_TypeExtension_Form_TransformationFailureHandlingService.php'));
    yield 1 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->load('getForm_TypeExtension_Form_HttpFoundationService.php'));
    yield 2 => ($this->privates['form.type_extension.form.validator'] ?? $this->load('getForm_TypeExtension_Form_ValidatorService.php'));
    yield 3 => ($this->privates['form.type_extension.upload.validator'] ?? $this->load('getForm_TypeExtension_Upload_ValidatorService.php'));
    yield 4 => ($this->privates['form.type_extension.csrf'] ?? $this->load('getForm_TypeExtension_CsrfService.php'));
    yield 5 => ($this->privates['form.type_extension.form.data_collector'] ?? $this->load('getForm_TypeExtension_Form_DataCollectorService.php'));
}, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
}, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
}, 1)], new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_guesser.validator'] ?? $this->load('getForm_TypeGuesser_ValidatorService.php'));
    yield 1 => ($this->privates['form.type_guesser.doctrine'] ?? $this->load('getForm_TypeGuesser_DoctrineService.php'));
}, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService())));
