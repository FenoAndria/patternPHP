<?php

use App\DecoratorPattern\Double;
use App\DecoratorPattern\Initial;
use App\DecoratorPattern\Quadruple;
use App\DependancyInjection\Jane;
use App\DependancyInjection\Jean;
use App\DependancyInjection\Person;
use App\Factory\CategoryFactory;
use App\Polymorphisme\DevelopperCreator;
use App\Polymorphisme\JuniorDevelopper;
use App\Polymorphisme\SeniorDevelopper;
use App\TraitPattern\BackendDevelopper;
use App\TraitPattern\FrontendDevelopper;
use App\TraitPattern\FullstackDevelopper;
use App\Singleton\Config;

require '../vendor/autoload.php';

/* 
    FACTORY 
*/
$categoryFactory = new CategoryFactory;
$juniorCat = $categoryFactory->createCategory('junior');
// var_dump($juniorCat);
/*
    POLYMORPHISME
*/
$devCreator = new DevelopperCreator;
$juniorDev = new JuniorDevelopper;
$seniorDev = new SeniorDevelopper;
// var_dump($devCreator->create($juniorDev));
// var_dump($devCreator->create($seniorDev));

/*
    TRAIT
*/
$backendDev = new BackendDevelopper;
// var_dump($backendDev->getInfo(), $backendDev->backendSkills());
$frontendDev = new FrontendDevelopper;
// var_dump($frontendDev->getInfo(), $frontendDev->frontendSkills());
$fullstackDev = new FullstackDevelopper;
// var_dump($fullstackDev->getInfo(), $fullstackDev->backendSkills(), $fullstackDev->frontendSkills());

/**
 * DECORATOR
 */
$initial = new Initial();
// var_dump($initial->price());
$double = new Double($initial);
// var_dump($double->price());
$quadruple = new Quadruple($initial);
// var_dump($quadruple->price());

/**
 * DEPENDANCY INJECTION
 */

$jane =  new Person(new Jane);
// var_dump($jane->presentation());
$jean =  new Person(new Jean);
// var_dump($jean->presentation());

/**
 * SINGLETON
 */
var_dump(Config::getValue('Frontends'));
