<?php

/**
 * @file
 * Definition of Drupal\blt\BLT.
 */

namespace Drupal\blt;

/**
 * Defines the base BLT implementation.
 */
class BLT implements BLTInterface {

  /**
   * The savory protein for the sandwich.
   *
   * @var Drupal\blt\Ingredient
   */
  protected $savoryProtein;

  /**
   * The crunchy vegetable for the sandwich.
   *
   * @var Drupal\blt\Ingredient
   */
  protected $crunchyVegetable;

  /**
   * The sweet vegetable for the sandwich.
   *
   * @var Drupal\blt\Ingredient
   */
  protected $sweetVegetable;

  /**
   * The condiments for the sandwich.
   *
   * @var array
   */
  protected $condiments;

  /**
   * The wrapper for the sandwich.
   *
   * @var Drupal\blt\Ingredient
   */
  protected $wrapper;

  /**
   * Constructs a BLT.
   *
   * @param Drupal\blt\Ingredient $wrappper
   *   The wrapper for the BLT.
   * @param array $condiments
   *   An array of Drupal\blt\Ingredient condiments for the sandwich.
   */
  public function __construct(Ingredient $wrapper, array $condiments) {
    // 'B' is for 'bacon'.
    $this->savoryProtein = new Ingredient('bacon', 'BACON!!');
    // 'L' is for 'lettuce'.
    $this->crunchyVegetable = new Ingredient('lettuce', 'Lettuce');
    // 'T' is for 'tomato'.
    $this->sweetVegetable = new Ingredient('tomato', 'Tomato');

    // Use the wrapper and condiments chosen by the caller.
    $this->wrapper = $wrapper;
    $this->condiments = $condiments;
  }

  /**
   * Gets the savory protein sandwich ingredient.
   *
   * @return Drupal\blt\Ingredient
   *   The savory protein ingredient for the sandwich, e.g. bacon.
   */
  public function savoryProtein() {
    return $this->savoryProtein;
  }

  /**
   * Gets the crunchy vegetable sandwich ingredient.
   *
   * @return Drupal\blt\Ingredient
   *   The crunchy vegetable ingredient for the sandwich, e.g. lettuce.
   */
  public function crunchyVegetable() {
    return $this->crunchyVegetable;
  }

  /**
   * Gets the sweet vegetable sandwich ingredient.
   *
   * @return Drupal\blt\Ingredient
   *   The sweet vegetable ingredient for the sandwich, e.g. tomatoes.
   */
  public function sweetVegetable() {
    return $this->sweetVegetable;
  }

  /**
   * Gets the wrapper for the sandwich.
   *
   * @return Drupal\blt\Ingredient
   *   The wrapper of the sandwich, e.g. bread or toast.
   */
  public function wrapper() {
    return $this->wrapper;
  }

  /**
   * Gets the condiments for the sandwich.
   *
   * @return array
   *   An array of Drupal\blt\Ingredient object condiments.
   */
  public function condiments() {
    return $this->condiments;
  }

  /**
   * Gets the filler ingredients for the sandwich.
   *
   * @return array
   *   An array of Drupal\blt\Ingredient objects.
   */
  public function ingredients() {
    return array(
      $this->savoryProtein,
      $this->crunchyVegetable,
      $this->sweetVegetable,
    );
  }

  /**
   * Allows the sandwich to be eaten.
   */
  public function eat() {
    drupal_set_message('NOM NOM NOM!');
  }

}
