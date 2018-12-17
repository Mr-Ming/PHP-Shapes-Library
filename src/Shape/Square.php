<?php

require_once "ShapeInterface.php";
require_once "ValidationHelper.php";

class Square implements ShapeInterface {
  private $side = '';

  public function __construct($side) {
    ValidationHelper::validateNumber($side);
    $this->side = $side;
  }

  public function getArea() {
    return pow($this->side, 2);
  }

  public function getPerimeter() {
    return 4 * $this->side;
  }

  public function resize($percentage) {
    ValidationHelper::validateNumber($percentage);
    $this->side = $this->side * $percentage;
  }

  public function getside() {
    return $this->side;
  }

  public function setside($side) {
    ValidationHelper::validateNumber($side);
    $this->side = $side;
  }
}