<?php
require_once "Forme.php";
require_once "Rectangle.php";
require_once "Cercle.php";

$rectangle1 = new Rectangle(15.5, 12.2, "rouge");

echo "Surface {$rectangle1->calculerSurface()} <br>";

$cercle1 = new Cercle(5, "vert");

echo "Surface {$cercle1->calculerSurface()}";

