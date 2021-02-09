<?php
require 'src\1Shape.php';
require 'src\1Rectangle.php';
require 'src\1Circle.php';
/**
 * Uncomment below line if attempting extra credit
 */
//require 'src\1Octagon.php';

$shape = new Shape(5,10);
$shape->setName('Shape1');
echo "1Shape id: {$shape->getId()}\n";
echo "1Shape name: {$shape->getName()}\n";
echo "1Shape area: {$shape->area()}\n";
echo "1Shape Type Description: {$shape::getTypeDescription()}\n";
echo "1Shape Full Description: {$shape->getFullDescription()}\n";

echo "=============================================================================================\n";

$rectangle = new Rectangle(5,10);
$rectangle->setName('Rectangle1');
echo "1Rectangle id: {$rectangle->getId()}\n";
echo "1Rectangle name: {$rectangle->getName()}\n";
echo "1Rectangle area: {$rectangle->area()}\n";
echo "1Rectangle Type Description: {$rectangle::getTypeDescription()}\n";
echo "1Rectangle Full Description: {$rectangle->getFullDescription()}\n";

echo "=============================================================================================\n";

$circle = new Circle(2);
$circle->setName('Circle1');
echo "1Circle id: {$circle->getId()}\n";
echo "1Circle name: {$circle->getName()}\n";
echo "1Circle area: {$circle->area()}\n";
echo "1Circle Type Description: {$circle::getTypeDescription()}\n";
echo "1Circle Full Description: {$circle->getFullDescription()}\n";

echo "=============================================================================================\n";

/**
 * Uncomment the following code if attempting extra credit
 */
//$octagon = new 1Octagon(5);
//$octagon->setName('Octagon1');
//echo "1Octagon id: {$octagon->getId()}\n";
//echo "1Octagon name: {$octagon->getName()}\n";
//echo "1Octagon area: {$octagon->area()}\n";
//echo "1Octagon Type Description: {$octagon::getTypeDescription()}\n";
//echo "1Octagon Full Description: {$octagon->getFullDescription()}\n";