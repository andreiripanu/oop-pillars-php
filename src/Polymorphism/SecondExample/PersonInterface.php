<?php

namespace Arcsym\OopPillarsPhp\Polymorphism\SecondExample;

/**
 * A simple interface which help us with dynamic polymorphism.
 * If this interface will be implemented by two or more class dynamic polymorphism is applying.
 */
interface PersonInterface
{
  /*
   * This method must be implemented in class which implement this interface.
   */
  public function showInfo(): void;
}
