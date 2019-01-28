<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 28/01/2019
 * Time: 13:50
 */
include "Cylinder.php";
$cylinder = new Cylinder("marry", 4, 3);
echo 'Area: ' . $cylinder->calculateArea();
echo '<br>';
echo 'Perimeter: ' . $cylinder->calculatePerimeter();