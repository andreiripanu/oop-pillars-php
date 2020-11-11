<?php

namespace Arcsym\OopPillarsPhp\Abstraction\SecondExample;

/**
 * A simple interface which help us with abstraction.
 * If this interface will be implemented by two or more class, also polymorphism is applying.
 */
interface PersonInterface
{
  /*
   * This method must be implemented in class which implement this interface.
   */
  public function prefixName(): string;
}
