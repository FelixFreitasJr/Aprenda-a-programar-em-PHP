<?php

require_once 'funcoes.php';

$contaCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => '10000'
    ], 
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => '300'
    ], 
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => '100'
    ], 
];


$contaCorrentes['123.456.789-10'] = sacar(
    $contaCorrentes['123.456.789-10'], 
    valorASacar:500
);
$contaCorrentes['123.456.689-11'] = sacar(
    $contaCorrentes['123.456.689-11'], 
    valorASacar:300
);

$contaCorrentes['123.256.789-12'] = depositar(
    $contaCorrentes['123.256.789-12'],
    valorADepositar:100
);

titularComLetrasMaiusculas($contaCorrentes ['123.256.789-12']);

foreach ($contaCorrentes as $cpf => $conta) {
    exibeMensagem(
        mensagem: "$cpf  $conta[titular] $conta[saldo]"
    );
}