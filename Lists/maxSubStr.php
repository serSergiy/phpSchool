<?php

function maxSubStr($string)
{
    $strArr = str_split($string, 1);
    $size = count($strArr);
    $all = [];
    $result = [];
    $possible = [];
    for ($i = 0; $i < $size; $i++) {
        for ($j = $i; $j < $size; $j++) {
            if (!in_array($strArr[$j], $possible)) {
                array_push($possible, $strArr[$j]);
            } elseif (count($possible) > count($result)) {
                $result = $possible;
                $possible = [];
                $all = [];
                array_push($all, implode($result));
            } elseif (count($possible) === count($result)) {
                $result = $possible;
                $possible = [];
                $resultStr = implode($result);
                if (!in_array($resultStr, $all)) {
                    array_push($all, $resultStr);
                }
            } else {
                $possible = [];
            }
        }
    }
//    return implode($result);
    return $all;
}

$string = 'pwwpqkew';

var_dump(maxSubStr($string));

$string = 'abcabcab';

var_dump(maxSubStr($string));

$string = 'bbbb';

var_dump(maxSubStr($string));

