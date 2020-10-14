<?php

namespace Arcsym\OopPillarsPhp\Polymorphism;

/**
 * This is a derived class from base class.
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

  /*
   * This method have the same name like in base class but do something different.
   * Dynamic polymorphism (method overriding) is applying.
   */
  public function showInfo(): void
  {
    printf("
      Student
      Lastname: %s
      Firstname: %s
      Gender: %s
      Registration Number: %s \n\n",
      $this->getLastname(),
      $this->getFirstname(),
      $this->getGender(),
      $this->registrationNumber
    );
  }
}
