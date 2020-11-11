<?php

use Arcsym\OopPillarsPhp\Abstraction\FirstExample\Student;

require dirname(__DIR__, 3).'/vendor/autoload.php';

/*
 * Abstraction with abstract class.
 */
$student = new Student();
$student
  ->setLastname('Ripanu')
  ->setFirstname('Andrei')
  ->setGender('masculine')
  ->setRegistrationNumber(123456789)
;
$student->showInfo();
