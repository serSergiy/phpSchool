<?php

function findPares($arr, $number)
{
    $result = [];
    for ($i = 0; $i < count($arr) - 1; $i++){
        for ($j = $i + 1; $j < count($arr); $j++){
            if ($arr[$i] + $arr[$j] === $number){
                array_push($result, [$i, $j]);
            }
        }
    }
    return $result;
}

$arr = [2, 7, 13, 8, 1, 4];

print_r(findPares($arr, 9));
