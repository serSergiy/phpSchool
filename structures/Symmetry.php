<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 17.02.2019
 * Time: 21:11
 */
require_once __DIR__.'/Stack.php';

$rules = [
    '{' => '}',
    '(' => ')',
    '<' => '>',
    '[' => ']',
    ];

if (!empty($argv[1])) {
    isSymmetric($argv[1], $rules)
        ? print_r('true')
        : print_r('false');
} else {
    echo 'Invalid argument', PHP_EOL;
}

function isSymmetric($input, $rules)
{
    $symbolsStack = new Stack();
    $arrInput = str_split($input);
    foreach ($arrInput as $value){
        if (key_exists($value, $rules)){
            $symbolsStack->push($rules[$value]);
        } elseif ($symbolsStack->isEmpty() || $symbolsStack->pop() !== $value) {
            return false;
        }
    }
    return $symbolsStack->isEmpty();
}

