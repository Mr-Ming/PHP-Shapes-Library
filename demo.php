<?php

require "src/Shape/Circle.php";
require "src/Shape/RightTriangle.php";
require "src/Shape/EquilateralTriangle.php";
require "src/Shape/Rectangle.php";
require "src/Shape/Square.php";
require "src/Shape/Parallelogram.php";

//  Circle
$radius = 2;
$circle = new Circle($radius);
echo "Starting Circle with Radius {$radius}\n";
echo "-Area = {$circle->getArea()} \n";
echo "-Permeter = {$circle->getPerimeter()} \n";
$resize_amount = .52322;
$circle->resize($resize_amount);
echo "-Resizing by {$resize_amount} \n";
echo "--New Radius = {$circle->getRadius()} \n";
echo "--New Area = {$circle->getArea()} \n";
echo "--New Perimeter = {$circle->getPerimeter()} \n";
$radius = 10;
echo "-Setting radius to {$radius} \n";
$circle->setRadius($radius);
echo "--New Radius = {$circle->getRadius()} \n";
echo "--New Area = {$circle->getArea()} \n";
echo "--New Perimeter = {$circle->getPerimeter()} \n";

//  Right Triange
$base = 10;
$height = 20;
$rightTriangle = new RightTriangle($base, $height);
echo "Starting RightTriangle with base {$base} and height {$height}\n";
echo "-Area = {$rightTriangle->getArea()} \n";
echo "-Permeter = {$rightTriangle->getPerimeter()} \n";
$resize_amount = .25;
$rightTriangle->resize($resize_amount);
echo "-Resizing by {$resize_amount} \n";
echo "--New Base = {$rightTriangle->getBase()} \n";
echo "--New Height = {$rightTriangle->getHeight()} \n";
echo "--New Area = {$rightTriangle->getArea()} \n";
echo "--New Perimeter = {$rightTriangle->getPerimeter()} \n";
$base = 50;
$height = 30;
echo "-Setting RightTriangle with base {$base} and height {$height} \n";
$rightTriangle->setBase($base);
$rightTriangle->setHeight($height);
echo "--New Base = {$rightTriangle->getBase()} \n";
echo "--New Height = {$rightTriangle->getHeight()} \n";
echo "--New Area = {$rightTriangle->getArea()} \n";
echo "--New Perimeter = {$rightTriangle->getPerimeter()} \n";

//  Equilateral Triangle
$side = 7;
$equilateralTriangle = new EquilateralTriangle($side);
echo "Starting Equilateral Triangle with Side {$side}\n";
echo "-Area = {$equilateralTriangle->getArea()} \n";
echo "-Permeter = {$equilateralTriangle->getPerimeter()} \n";
$resize_amount = .52322;
$equilateralTriangle->resize($resize_amount);
echo "-Resizing by {$resize_amount} \n";
echo "--New Side = {$equilateralTriangle->getSide()} \n";
echo "--New Area = {$equilateralTriangle->getArea()} \n";
echo "--New Perimeter = {$equilateralTriangle->getPerimeter()} \n";
$side = 5;
echo "-Setting side to {$side} \n";
$equilateralTriangle->setSide($side);
echo "--New Radius = {$equilateralTriangle->getSide()} \n";
echo "--New Area = {$equilateralTriangle->getArea()} \n";
echo "--New Perimeter = {$equilateralTriangle->getPerimeter()} \n";

//  Rectangle
$length = 10;
$width = 20;
$rectangle = new Rectangle($length, $width);
echo "Starting Rectangle with length {$length} and width {$width}\n";
echo "-Area = {$rectangle->getArea()} \n";
echo "-Permeter = {$rectangle->getPerimeter()} \n";
$resize_amount = .85;
$rectangle->resize($resize_amount);
echo "-Resizing by {$resize_amount} \n";
echo "--New length = {$rectangle->getlength()} \n";
echo "--New width = {$rectangle->getwidth()} \n";
echo "--New Area = {$rectangle->getArea()} \n";
echo "--New Perimeter = {$rectangle->getPerimeter()} \n";
$length = 90;
$width = 50;
echo "-Setting Rectangle with length {$length} and width {$width} \n";
$rectangle->setlength($length);
$rectangle->setwidth($width);
echo "--New length = {$rectangle->getlength()} \n";
echo "--New width = {$rectangle->getwidth()} \n";
echo "--New Area = {$rectangle->getArea()} \n";
echo "--New Perimeter = {$rectangle->getPerimeter()} \n";

//  Square
$side = 3;
$square = new Square($side);
echo "Starting Square with Side {$side}\n";
echo "-Area = {$square->getArea()} \n";
echo "-Permeter = {$square->getPerimeter()} \n";
$resize_amount = .52322;
$square->resize($resize_amount);
echo "-Resizing by {$resize_amount} \n";
echo "--New Side = {$square->getSide()} \n";
echo "--New Area = {$square->getArea()} \n";
echo "--New Perimeter = {$square->getPerimeter()} \n";
$side = 2;
echo "-Setting side to {$side} \n";
$square->setSide($side);
echo "--New Side = {$square->getSide()} \n";
echo "--New Area = {$square->getArea()} \n";
echo "--New Perimeter = {$square->getPerimeter()} \n";

//  Parallelogram
$base = 8;
$side = 12;
$height = 9;
$parallelogram = new Parallelogram($base, $side, $height);
echo "Starting Parallelogram with base {$base}, side {$side}, and height {$height}\n";
echo "-Area = {$parallelogram->getArea()} \n";
echo "-Permeter = {$parallelogram->getPerimeter()} \n";
$resize_amount = 2.75;
$parallelogram->resize($resize_amount);
echo "-Resizing by {$resize_amount} \n";
echo "--New Base = {$parallelogram->getBase()} \n";
echo "--New Side = {$parallelogram->getSide()} \n";
echo "--New Height = {$parallelogram->getHeight()} \n";
echo "--New Area = {$parallelogram->getArea()} \n";
echo "--New Perimeter = {$parallelogram->getPerimeter()} \n";
$base = 30;
$side = 25;
$height = 20;
echo "-Setting Parallelogram with base {$base}, side {$side}, and height {$height} \n";
$parallelogram->setBase($base);
$parallelogram->setSide($side);
$parallelogram->setHeight($height);
echo "--New Base = {$parallelogram->getBase()} \n";
echo "--New Side = {$parallelogram->getSide()} \n";
echo "--New Height = {$parallelogram->getHeight()} \n";
echo "--New Area = {$parallelogram->getArea()} \n";
echo "--New Perimeter = {$parallelogram->getPerimeter()} \n";


