<?php

/*
 * Types of polymorphism:
 * 1. Static (compile time) - method overloading.
 * 2. Dynamic (run time) - method overriding.
 */

use Arcsym\OopPillarsPhp\Polymorphism\FirstExample\Person;
use Arcsym\OopPillarsPhp\Polymorphism\FirstExample\Student;

require dirname(__DIR__, 3).'/vendor/autoload.php';

/*
 * Dynamic polymorphism (method overriding) with extended class.
 */
$person = new Person();
$person
  ->setLastname('Ripanu')
  ->setFirstname('Andrei')
  ->setGender('masculine')
;
$person->showInfo();

$student = new Student();
$student
  ->setLastname('Ripanu')
  ->setFirstname('Corneliu')
  ->setGender('masculine')
  ->setRegistrationNumber(123456789)
;
$student->showInfo();


/**
 * Static polymorphism (method overloading).
 *
 * @link https://www.php.net/manual/en/language.oop5.overloading.php
 */
