<?php

/**
 * @file
 * Definition of Drupal\blt\BLTInterface.
 */

namespace Drupal\blt;

/**
 * Defines an ingredient for BLTs.
 */
class Ingredient {

  /**
   * Constructs an ingredient object.
   *
   * @param string $id
   *   The machine-readable ID for the ingredient.
   * @param string $label
   *   The human-readable label for the ingredient.
   */
  public function __construct($id, $label) {
    $this->id = $id;
    $this->label = $label;
  }

}