<?php

use Arcsym\OopPillarsPhp\Abstraction\AStudent;
use Arcsym\OopPillarsPhp\Abstraction\Student;

require dirname(__DIR__, 2).'/vendor/autoload.php';

/*
 * Abstraction with abstract class.
 */
$student = new Student();
$student
  ->setLastname('Ripanu')
  ->setFirstname('Andrei')
  ->setGender('Masculine')
  ->setRegistrationNumber(123456789)
;
$student->showInfo();


/*
 * Abstraction with interface.
 */
$student = new AStudent();
$student
  ->setLastname('Ripanu')
  ->setFirstname('Andrei')
  ->setGender('Masculine')
  ->setRegistrationNumber(123456789)
;
printf("%s %s %s has registration number %s \n",
  $student->prefixName(),
  $student->getLastname(),
  $student->getFirstname(),
  $student->getRegistrationNumber()
);
