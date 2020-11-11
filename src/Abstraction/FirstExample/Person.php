<?php

namespace Arcsym\OopPillarsPhp\Abstraction\FirstExample;

/**
 * This is a general class for a person.
 * So... we set it abstract.
 */
abstract class Person
{
  /*
   * This properties have private visibility. Child can't access it.
   * If child need to access this properties, we can set the visibility to protected.
   */
  private string $lastname;

  private string $firstname;

  private string $gender;


  /*
   * This method will be implemented in each child which extends this abstract class.
   * Implementation must be in child class. This is specific for abstraction.
   */
  public abstract function showInfo();

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
