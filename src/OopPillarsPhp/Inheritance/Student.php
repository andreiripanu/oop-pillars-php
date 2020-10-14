<?php

namespace Arcsym\OopPillarsPhp\Inheritance;

/*
 * This is a derived class from base class.
 * This class extends all properties and all methods from base class depends on visibility.
 */
class Student extends Person
{
  private int $registrationNumber;


  public function setRegistrationNumber(int $registrationNumber): self
  {
    $this->registrationNumber = $registrationNumber;

    return $this;
  }

  public function getRegistrationNumber(): int
  {
    return $this->registrationNumber;
  }
}
