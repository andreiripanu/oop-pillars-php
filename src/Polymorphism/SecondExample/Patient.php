<?php

namespace Arcsym\OopPillarsPhp\Polymorphism\SecondExample;

/**
 * This class implement an interface.
 */
class Patient implements PersonInterface
{
  private string $lastname;

  private string $firstname;

  private string $diagnostic;


  /*
   * This class must implement the method from interface.
   * Dynamic polymorphism (method overriding) is applying.
   */
  public function showInfo(): void
  {
    printf("
      Patient
      Lastname: %s
      Firstname: %s
      Diagnostic: %s \n\n",
      $this->lastname,
      $this->firstname,
      $this->diagnostic
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

  public function setDiagnostic(string $diagnostic): self
  {
    $this->diagnostic = $diagnostic;

    return $this;
  }

  public function getDiagnostic(): string
  {
    return $this->diagnostic;
  }
}
