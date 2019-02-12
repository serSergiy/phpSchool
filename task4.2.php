<?php

$argv = $_SERVER['argv'];

if (!empty($argv[1]) || $argv[1] % 2 === 1) {
    drawSnake($argv[1]);
} else {
    echo 'Invalid argument', PHP_EOL;
}

function drawSnake($n)
{
    for ($i = 0; $i < $n; $i++){
        for ($j = 0; $j <$n; $j++){
            $j % 2 === 0
                ? print_r( $i + $j * $n + 1 . ' ')
                : print_r( $j * $n - $i + $n . ' ');
        }
        echo PHP_EOL;
    }
}

