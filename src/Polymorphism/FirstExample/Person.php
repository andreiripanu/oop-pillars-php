<?php

namespace Arcsym\OopPillarsPhp\Polymorphism\FirstExample;

/**
 * This is the base class
 */
class Person
{
  private string $lastname;

  private string $firstname;

  private string $gender;


  /*
   * This method will be implemented in child class with different implementation.
   */
  public function showInfo(): void
  {
    printf("
      Person
      Lastname: %s
      Firstname: %s
      Gender: %s \n\n",
      $this->lastname,
      $this->firstname,
      $this->gender
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

  public function setGender(string $gender): self
  {
    $this->gender = $gender;

    return $this;
  }

  public function getGender(): string
  {
    return $this->gender;
  }
}
