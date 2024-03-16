<?php

$contaCorrentes = [
    '270.212.616-24' => [
        'titular' => 'Felix',
        'saldo' => '1500'
    ], 
    '524.674.819-72' => [
        'titular' => 'Robson',
        'saldo' => '14000'
    ], 
    '455.882.077-18' => [
        'titular' => 'Lucas',
        'saldo' => '500'
    ], 
];

$contaCorrentes['706.025.063-87'] = [
    'titular' => 'Claudia',
    'saldo' => '2022'
];

foreach ($contaCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}