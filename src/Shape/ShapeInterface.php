<?php

interface ShapeInterface {
	public function getArea();
	public function getPerimeter();
	public function resize($percentage);
}