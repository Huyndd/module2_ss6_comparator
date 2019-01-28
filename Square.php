<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 28/01/2019
 * Time: 13:52
 */
include "Rectangle.php";

class Square extends Rectangle
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
}