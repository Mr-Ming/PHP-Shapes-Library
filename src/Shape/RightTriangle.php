<?php

require_once "ShapeInterface.php";
require_once "ValidationHelper.php";

class RightTriangle implements ShapeInterface {
  private $base = '';
  private $height = '';

  public function __construct($base, $height) {
    ValidationHelper::validateNumber($base);
    ValidationHelper::validateNumber($height);
    $this->base = $base;
    $this->height = $height;
  }

  public function getArea() {
    return ($this->base * $this->height) / 2;
  }

  public function getPerimeter() {
    //  P = a + b + sqrt(a^2 + b^2)
    //  P = (part1) + (part2)
    $base = $this->base;
    $height = $this->height;

    $part1 = $base + $height;
    $part2 = sqrt(pow($base, 2) + pow($height, 2));

    return $part1 + $part2;
  }

  public function resize($percentage) {
    ValidationHelper::validateNumber($percentage);
    $this->base = $this->base * $percentage;
    $this->height = $this->height * $percentage;
  }

  public function getBase() {
    return $this->base;
  }

  public function getHeight() {
    return $this->height;
  }

  public function setBase($base) {
    ValidationHelper::validateNumber($base);
    $this->base = $base;
  }

  public function setHeight($height) {
    ValidationHelper::validateNumber($height);
    $this->height = $height;
  }
}