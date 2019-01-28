<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 28/01/2019
 * Time: 13:51
 */
include "Rectangle.php";
$rectangle = new Rectangle("rectangle", 5, 4);
echo 'Area: ' . $rectangle->calculateArea();
echo '<br>';
echo 'Perimeter: ' . $rectangle->calculatePerimeter();