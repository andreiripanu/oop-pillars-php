<?php

/*
 * Types of polymorphism:
 * 1. Static (compile time) - method overloading.
 * 2. Dynamic (run time) - method overriding.
 */

use Arcsym\OopPillarsPhp\Polymorphism\SecondExample\Doctor;
use Arcsym\OopPillarsPhp\Polymorphism\SecondExample\Patient;

require dirname(__DIR__, 3).'/vendor/autoload.php';

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
