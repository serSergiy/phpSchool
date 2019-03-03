<?php

function isPalindom($string)
{
    $strArr = str_split($string, 1);
    $size = count($strArr);
    for ($i = 0; $i < intdiv($size, 2); $i++)
        if ($strArr[$i] != $strArr[$size - $i - 1])
            return false;
    return true;
}

$string = '0123210';
var_dump(isPalindom($string));

$string = '01233210';
var_dump(isPalindom($string));

$string = '012dda3210';
var_dump(isPalindom($string));
