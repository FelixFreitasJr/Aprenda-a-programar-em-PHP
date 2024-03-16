<?php

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];

// o php só aceita interger ou string. algo diferente é convertido.

// 1.5 = 1
// true = 1
// false = 0

foreach($array as $item) {
    echo $item . PHP_EOL;
}