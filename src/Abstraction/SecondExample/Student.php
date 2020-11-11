<?php

namespace Arcsym\OopPillarsPhp\Abstraction\SecondExample;

/*
 * This class implement an interface.
 */
class Student implements PersonInterface
{
  private string $lastname;

  private string $firstname;

  private string $gender;

  private int $registrationNumber;


  /*
   * This class must implement the method from interface.
   * Abstraction is applying.
   */
  public function prefixName(): string
  {
    return strtolower($this->gender) == 'masculine' ? 'Mr.' : 'Mrs.';
  }

  public function setLastname(string $lastname): self
  {
    $this->lastname = $lastname;

    return $this;
  }

  public function getLastname(): string
  {
    return $this->lastname;
  }

  public function setFirstname(string $firstname): self
  {
    $this->firstname = $firstname;

    return $this;
  }

  public function getFirstname(): string
  {
    return $this->firstname;
  }

  public function setGender(string $gender): self
  {
    $this->gender = $gender;

    return $this;
  }

  public function getGender(): string
  {
    return $this->gender;
  }

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
