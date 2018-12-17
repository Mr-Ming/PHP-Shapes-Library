<?php

require_once "ShapeInterface.php";
require_once "ValidationHelper.php";

class Parallelogram implements ShapeInterface {
  private $base = '';
  private $side = '';
  private $height = '';

  public function __construct($base, $side, $height) {
    ValidationHelper::validateNumber($base);
    ValidationHelper::validateNumber($side);
    ValidationHelper::validateNumber($height);
    $this->base = $base;
    $this->side = $side;
    $this->height = $height;
  }

  public function getArea() {
    return $this->base * $this->height;
  }

  public function getPerimeter() {
    return 2 * ($this->base + $this->side);
  }

  public function resize($percentage) {
    ValidationHelper::validateNumber($percentage);
    $this->base = $this->base * $percentage;
    $this->side = $this->side * $percentage;
    $this->height = $this->height * $percentage;
  }

  public function getBase() {
    return $this->base;
  }

  public function getSide() {
    return $this->side;
  }

  public function getHeight() {
    return $this->height;
  }

  public function setBase($base) {
    ValidationHelper::validateNumber($base);
    $this->base = $base;
  }

  public function setSide($side) {
    ValidationHelper::validateNumber($side);
    $this->side = $side;
  }

  public function setHeight($height) {
    ValidationHelper::validateNumber($height);
    $this->height = $height;
  }
}