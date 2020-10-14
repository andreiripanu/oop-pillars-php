<?php

use Arcsym\OopPillarsPhp\Encapsulation\Student;

require dirname(__DIR__, 2).'/vendor/autoload.php';

/*
 * An object is created.
 * We say that, variable $student is an class object/object/instance of a class/class instance.
 */
$student = new Student();

/*
 * Specific methods to write data on properties.
 * Encapsulation is applying because properties are accessed with methods.
 */
$student
  ->setLastname('Ripanu')
  ->setFirstname('Andrei')
;

/*
 * Specific methods to read data from properties.
 * Encapsulation is applying because properties are accessed with methods.
 */
printf("Student's name: %s %s \n", $student->getLastname(), $student->getFirstname());
echo dirname(__DIR__, 2); echo PHP_EOL; echo __FILE__;

/*
 * A "PHP Fatal error" will be generating because visibility is set to private.
 * The object try to access the property directly.
 * Accessing properties from outside is not specific for encapsulation.
 * This properties need to be hidden/protected.
 * Encapsulation is not applying here.
 */
// printf("Error: %s", $student->lastname);
