<?php

/**
 * @file
 * Definition of Drupal\blt\BLTInterface.
 */

namespace Drupal\blt;

/**
 * Defines an interface for creating tasty sandwiches.
 */
interface BLTInterface {

  /**
   * Gets the savory protein sandwich ingredient.
   *
   * @return Drupal\blt\Ingredient
   *   The savory protein ingredient for the sandwich, e.g. bacon.
   */
  public function savoryProtein();

  /**
   * Gets the crunchy vegetable sandwich ingredient.
   *
   * @return Drupal\blt\Ingredient
   *   The crunchy vegetable ingredient for the sandwich, e.g. lettuce.
   */
  public function crunchyVegetable();

  /**
   * Gets the sweet vegetable sandwich ingredient.
   *
   * @return Drupal\blt\Ingredient
   *   The sweet vegetable ingredient for the sandwich, e.g. tomatoes.
   */
  public function sweetVegetable();

  /**
   * Gets the wrapper for the sandwich.
   *
   * @return Drupal\blt\Ingredient
   *   The wrapper of the sandwich, e.g. bread or toast.
   */
  public function wrapper();

  /**
   * Gets the filler ingredients for the sandwich.
   *
   * @return array
   *   An array of Drupal\blt\Ingredient objects.
   */
  public function ingredients();

  /**
   * Allows the sandwich to be eaten.
   */
  public function eat();

}