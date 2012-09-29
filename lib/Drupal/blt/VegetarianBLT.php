<?php

/**
 * @file
 * Definition of Drupal\blt\VegetarianBLT.
 */

namespace Drupal\blt;

/**
 * Defines the base vegetarian BLT implementation.
 */
class VegetarianBLT extends BLT {

  /**
   * Overrides Drupal\blt\BLT::__construct().
   */
  public function __construct(Ingredient $wrapper, array $condiments) {
    parent:: __construct($wrapper, $condiments);
    // Use yummy tempeh in place of the carnivores' bacon.
    $this->savoryProtein = new Ingredient('tempeh', 'Tempeh');
  }

}
