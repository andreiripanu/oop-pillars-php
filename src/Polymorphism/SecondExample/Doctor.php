<?php

namespace Arcsym\OopPillarsPhp\Polymorphism\SecondExample;

/**
 * This class implement an interface.
 */
class Doctor implements PersonInterface
{
  private string $lastname;

  private string $firstname;

  private string $specialty;


  /*
   * This class must implement the method from interface.
   * Dynamic polymorphism (method overriding) is applying.
   */
  public function showInfo(): void
  {
    printf("
      Doctor
      Lastname: %s
      Firstname: %s
      Specialty: %s \n\n",
      $this->lastname,
      $this->firstname,
      $this->specialty
    );
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

  public function setSpecialty(string $specialty): self
  {
    $this->specialty = $specialty;

    return $this;
  }

  public function getSpecialty(): string
  {
    return $this->specialty;
  }
}
