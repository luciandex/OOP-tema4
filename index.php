<?php declare(strict_types=1);

require_once "bootstrap.php";

use Classes\Rectangle;
use Classes\RightTriangle;

echo "<hr> RIGHT TRIANGLE";

$rightTriangle = new RightTriangle(3, 4, 5);
$rightTriangle->setColor("blue");
var_dump($rightTriangle);
echo $rightTriangle;
$rightTriangle->setRightTriangle(5, 12, 13);
$rightTriangle->setColor("red");
var_dump($rightTriangle);
var_dump($rightTriangle->getRightTriangle());
var_dump($rightTriangle->getColor());
var_dump("Right Triangle AREA is = " . $rightTriangle->area() . " cmp");
var_dump("Right Triangle PERIMETER is = " . $rightTriangle->perimeter() . " cm");


echo "<hr> RECTANGLE";
$rectangle = new Rectangle(10, 5);
$rectangle->setColor("grey");
var_dump($rectangle);
echo $rectangle;
$rectangle->setDimensions(8, 2);
var_dump($rectangle->getDimensions());
var_dump($rectangle->getColor());
var_dump("Rectangle AREA is = " . $rectangle->area() . " cmp");
var_dump("Rectangle PERIMETER is = " . $rectangle->perimeter() . " cm");
