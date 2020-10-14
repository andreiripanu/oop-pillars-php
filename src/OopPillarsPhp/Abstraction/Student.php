<?php

namespace Arcsym\OopPillarsPhp\Abstraction;

/**
 * This is a derived class from abstract class.
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
   * This class must implement the abstract method from abstract class.
   * Abstraction is applying.
   */
  public function showInfo(): void
  {
    printf("
      Lastname: %s
      Firstname: %s
      Gender: %s
      Registration Number: %s \n",
      $this->getLastname(),
      $this->getFirstname(),
      $this->getGender(),
      $this->registrationNumber
    );
  }
}
