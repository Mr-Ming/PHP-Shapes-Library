<?php

require_once "ShapeInterface.php";
require_once "ValidationHelper.php";

class EquilateralTriangle implements ShapeInterface {
  private $side = '';

  public function __construct($side) {
    ValidationHelper::validateNumber($side);
    $this->side = $side;
  }

  public function getArea() {
    return ((sqrt(3)) / 4) * pow($this->side, 2);
  }

  public function getPerimeter() {
    return 3 * $this->side;
  }

  public function resize($percentage) {
    ValidationHelper::validateNumber($percentage);
    $this->side = $this->side * $percentage;
  }

  public function getSide() {
    return $this->side;
  }

  public function setSide($side) {
    ValidationHelper::validateNumber($side);
    $this->side = $side;
  }
}