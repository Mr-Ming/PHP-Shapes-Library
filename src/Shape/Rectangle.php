<?php

require_once "ShapeInterface.php";
require_once "ValidationHelper.php";

class Rectangle implements ShapeInterface {
  private $length = '';
  private $width = '';

  public function __construct($length, $width) {
    ValidationHelper::validateNumber($length);
    ValidationHelper::validateNumber($width);
    $this->length = $length;
    $this->width = $width;
  }

  public function getArea() {
    return $this->length * $this->width;
  }

  public function getPerimeter() {
    return 2 * ($this->length + $this->width);
  }

  public function resize($percentage) {
    ValidationHelper::validateNumber($percentage);
    $this->length = $this->length * $percentage;
    $this->width = $this->width * $percentage;
  }

  public function getlength() {
    return $this->length;
  }

  public function getwidth() {
    return $this->width;
  }

  public function setlength($length) {
    ValidationHelper::validateNumber($length);
    $this->length = $length;
  }

  public function setwidth($width) {
    ValidationHelper::validateNumber($width);
    $this->width = $width;
  }
}