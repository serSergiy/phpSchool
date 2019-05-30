<?php

$arr = [4, 7, 1, 3, 2, 6];

echo json_encode($arr);

mergeSort($arr, 0, count($arr) - 1);

echo json_encode($arr);

function mergeSort(&$A, $p, $r)
{
    if ($p < $r) {
        $q = floor(($p + $r) / 2);
        mergeSort($A, $p, $q);
        mergeSort($A, $q + 1, $r);
        merge($A, $p, $q, $r);
    }
}

function merge(&$A, $p, $q, $r)
{
    $n1 = $q - $p + 1;
    $n2 = $r - $q;

    $L = [];
    $R = [];

    for ($i = 0; $i < $n1; $i++) {
        $L[$i] = $A[$p + $i - 1];
    }

    for ($j = 0; $j < $n2; $j++) {
        $R[$j] = $A[$q + $j];
    }

    $L[$n1 + 1] = INF;
    $R[$n2 + 1] = INF;

    $i = 0;
    $j = 0;

    for ($k = $p; $k < $r; $k++) {
        if ($L[$j] <= $R[$j]) {
            $A[$k] = $L[$i];
            $i++;
        } else {
            $A[$k] = $R[$j];
            $j++;
        }
    }
}