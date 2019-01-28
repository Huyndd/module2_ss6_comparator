<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 28/01/2019
 * Time: 13:49
 */
include "Circle.php";
$circle = new Circle("indigo", 4);
echo 'Area: ' . $circle->calculateArea();
echo '<br>';
echo 'Perimeter: ' . $circle->calculatePerimeter();