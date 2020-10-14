<?php

/*
 * Types of polymorphism:
 * 1. Static (compile time) - method overloading.
 * 2. Dynamic (run time) - method overriding.
 */

use Arcsym\OopPillarsPhp\Polymorphism\Doctor;
use Arcsym\OopPillarsPhp\Polymorphism\Patient;
use Arcsym\OopPillarsPhp\Polymorphism\Person;
use Arcsym\OopPillarsPhp\Polymorphism\Student;

require dirname(__DIR__).'/../../vendor/autoload.php';

/*
 * Dynamic polymorphism (method overriding) with extended class.
 */
$person = new Person();
$person
  ->setLastname('Ripanu')
  ->setFirstname('Andrei')
  ->setGender('Masculine')
;
$person->showInfo();

$student = new Student();
$student
  ->setLastname('Ripanu')
  ->setFirstname('Corneliu')
  ->setGender('Masculine')
  ->setRegistrationNumber(123456789)
;
$student->showInfo();


/*
 * Dynamic polymorphism (method overriding) with interface.
 */
$doctor = new Doctor();
$doctor
  ->setLastname('Ionescu')
  ->setFirstname('Andrei')
  ->setSpecialty('cardiology')
;
$doctor->showInfo();

$patient = new Patient();
$patient
  ->setLastname('Popescu')
  ->setFirstname('Alin')
  ->setDiagnostic('endocarditis')
;
$patient->showInfo();


/**
 * Static polymorphism (method overloading).
 *
 * @link https://www.php.net/manual/en/language.oop5.overloading.php
 */
