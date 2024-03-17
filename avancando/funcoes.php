<?php

function sacar(array $conta, float $valorASacar): array{
    if ($valorASacar > $conta['saldo']){
        exibeMensagem(mensagem:"Você não pode sacar");
    } else{
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}


function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}


function depositar(array $conta, float $valorADepositar): array{
    if ($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    } else{
        exibeMensagem(mensagem:"Depositos precisam ser positivos");
    }
    return $conta;
}


function titularComLetrasMaiusculas (array &$conta){
    
    $conta['titular'] = mb_strtoupper($conta['titular']);
}