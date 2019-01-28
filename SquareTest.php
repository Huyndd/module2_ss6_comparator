<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 28/01/2019
 * Time: 13:52
 */
include "Square.php";
$square = new Square("square", 5);
echo 'Area: ' . $square->calculateArea();
echo '<br>';
echo 'Perimeter: ' . $square->calculatePerimeter();