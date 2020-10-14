<?php

namespace Arcsym\OopPillarsPhp\Inheritance;

/*
 * This is the base class.
 */
class Person
{
  /*
   * This properties have private visibility. Child can't access it directly.
   * If child need to access this properties, we can set the visibility like protected instead private.
   */
  private string $lastname;

  private string $firstname;

  private string $gender;


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
