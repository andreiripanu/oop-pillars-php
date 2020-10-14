<?php

namespace Arcsym\OopPillarsPhp\Encapsulation;

/*
 * Class put together properties and methods.
 * We can say this aspect is encapsulation.
 * So... when a class is created, encapsulation is applying.
 */
class Student
{
  /*
   * This two properties have a private visibility. It can't be access from outside.
   * Properties are hidden.
   * If we need to access this properties, we use specific methods.
   * This is specific for encapsulation.
   */
  private string $lastname;

  private string $firstname;


  /*
   * With the methods below, we can access the properties.
   * Again, encapsulation is applying.
   */
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
}
