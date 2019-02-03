<?php

$bills = array(
    500,
    200,
    100,
    50,
    20,
    10,
    5,
    2,
    1,
);

$amount = $argv[1];
if ($amount < 1 || $amount > 100000) {
    echo 'Amount should be in 1-100000';
} else {
    $result = getMoney($bills, $amount);
    outpResult($result);
}

function getMoney($bills, $amount)
{
    $result = array();

    foreach ($bills as $value) {
        if (intdiv($amount , $value) > 0) {
            $result[$value] = intdiv($amount , $value);
            $amount %= $value;
        }
    }
    return $result;
}

function outpResult($result){
    foreach ($result as $key => $value) {
        echo $key . " : " . $value . PHP_EOL;
    }
}