<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 28/01/2019
 * Time: 13:48
 */
include "Circle.php";
include "Comparator.php";

class CircleComparator implements Comparator
{
    public function compare($circleOne, $circleTwo)
    {
        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();
        if ($radiusOne > $radiusTwo) {
            return 1;
        } else if ($radiusOne < $radiusTwo) {
            return -1;
        } else {
            return 0;
        }
    }
}