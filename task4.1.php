<?php

$argv = $_SERVER['argv'];

if (!empty($argv[1]) && $argv[1] % 2 === 1) {
    drawDiamond($argv[1]);
} else {
    echo 'Argument should be even number >= 1', PHP_EOL;
}

function drawDiamond($maxLen)
{
    for ($i = 1; $i <= $maxLen; $i+=2){
        drawLine($maxLen, $i);
    }

    for ($j = $maxLen - 2; $j > 0; $j-=2){
        drawLine($maxLen, $j);
    }
}

function drawLine($maxLen, $count)
{
    for ($i = 0; $i <= ($maxLen - $count) / 2; $i++){
        echo " ";
    }

    for ($i = 0; $i < $count; $i++){
        echo "*";
    }

    for ($i = 0; $i <= ($maxLen - $count) / 2; $i++){
        echo " ";
    }
    echo PHP_EOL;
}