<?php

$arr = [5, 4, 3, 2, 1];

for ($i = 0; $i < count($arr) - 1; $i++) {
    for ($j = count($arr) - 1; $j > 0; $j--) {
        if ($arr[$j] < $arr[$j - 1]){
            $temp = $arr[$j];
            $arr[$j] = $arr[$j - 1];
            $arr[$j - 1] = $temp;
        }
    }
}

