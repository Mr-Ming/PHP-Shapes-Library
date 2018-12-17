<?php

require_once "ShapeInterface.php";
require_once "ValidationHelper.php";

class Circle implements ShapeInterface {
  private $radius = '';

  public function __construct($radius) {
    ValidationHelper::validateNumber($radius);
    $this->radius = $radius;
  }

  public function getArea() {
    return pi() * pow($this->radius, 2);
  }

  public function getPerimeter() {
    return 2 * $this->radius * pi();   
  }

  public function resize($percentage) {
    ValidationHelper::validateNumber($percentage);
    $this->radius = $this->radius * $percentage;
  }

  public function getRadius() {
    return $this->radius;
  }

  public function setRadius($radius) {
    ValidationHelper::validateNumber($radius);
    $this->radius = $radius;
  }
}