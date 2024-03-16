<?php

function sacar($conta, float $valorASacar)
{
    if ($valorASacar > $conta['saldo']){
        exibeMensagem(mensagem:"Você não pode sacar");
    } else{
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar($conta, $valorADepositar){
    if ($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    } else{
        exibeMensagem(mensagem:"Depositos precisam ser positivos");
    }

    return $conta;
}

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}