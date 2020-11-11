<?php

use Arcsym\OopPillarsPhp\Abstraction\SecondExample\Student;

require dirname(__DIR__, 3).'/vendor/autoload.php';

/*
 * Abstraction with interface.
 */
$student = new Student();
$student
  ->setLastname('Ripanu')
  ->setFirstname('Andrei')
  ->setGender('masculine')
  ->setRegistrationNumber(123456789)
;
printf("%s %s %s has registration number %s \n",
  $student->prefixName(),
  $student->getLastname(),
  $student->getFirstname(),
  $student->getRegistrationNumber()
);
