<?php

/*
 * Types of inheritance:
 * 1. Single - A is a base class, class B extends class A.
 * 2. Multilevel - A is base class, class B extends class A, class C extends class B (class B is parent class for class C).
 * 3. Hierarchical - A is base class, class B extends class A, class C extends class A.
 * 4. Multiple - C is a class which extends class A and class B at same level.
 * 5. Hybrid - This is combination of more than one inheritance.
 *
 * 4 and 5 are not supported by PHP. However, with traits and interfaces we can realize it.
 */

use Arcsym\OopPillarsPhp\Inheritance\Student;

require dirname(__DIR__).'/../../vendor/autoload.php';

$student = new Student();

/*
 * The derived class use inherited methods to populate with data inherited properties.
 */
$student
  ->setLastname('Ripanu')
  ->setFirstname('Andrei')
  ->setRegistrationNumber(123456789)
;

printf("Student: %s %s has registration number: %s \n",
  $student->getLastname(), $student->getFirstname(), $student->getRegistrationNumber());
