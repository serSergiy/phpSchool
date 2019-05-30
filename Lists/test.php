<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 22.02.2019
 * Time: 20:19
 */

$x = [0, 1, 2, 3, 4, 5, 6,  7,  8];
$y = [1, 1, 2, 3, 5, 8, 13, 21, 34];

function fibonate($number)
{
    return $number <= 1
        ? 1
        : fibonate($number - 1) + fibonate($number - 2);
}

echo fibonate(80);