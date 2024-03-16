<?php

$conta1 = [
    'titular' => 'Felix',
    'saldo' => '1500'
];

$conta2 = [
    'titular' => 'Robson',
    'saldo' => '14000'
];

$conta3 = [
    'titular' => 'Lucas',
    'saldo' => '500'
];

$contaCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contaCorrentes); $i ++) {
    echo $contaCorrentes[$i]['titular'] . PHP_EOL;
}