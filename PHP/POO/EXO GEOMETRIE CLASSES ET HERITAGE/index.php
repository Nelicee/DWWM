<?php

require_once "Pave.class.php";
require_once "Rectangle.class.php";
require_once "TriangleRectangle.class.php";

$rectangle = new Rectangle(5,3);
$pave = new Pave(6,3,2);
$triangleRectangle = new TriangleRectangle(15,6);

$rectangle->afficherRectangle();
$pave->afficherPave();
$triangleRectangle->afficherTriangeRectangle();