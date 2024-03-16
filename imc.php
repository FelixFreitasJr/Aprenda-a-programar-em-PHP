<?php

$altura = 1.76;
$peso = 93;
$imc = $peso / $altura ** 2;
echo PHP_EOL;
echo "Valores do IMC: Pessoas de 20 a 60 anos" . PHP_EOL;

if ($imc <= 18.5){
    echo "Seu IMC é $imc". PHP_EOL;
    echo "Você está com BAIXO PESO" . PHP_EOL;
} elseif ($imc <= 24.99){
        echo "Seu IMC é $imc". PHP_EOL;
        echo "Você está com NORMAL" . PHP_EOL;
} elseif ($imc <= 29.99){
        echo "Seu IMC é $imc". PHP_EOL;
        echo "Você está com SOBREPESO" . PHP_EOL;
} else {
    echo "Seu IMC é $imc". PHP_EOL;
    echo "Você está com OBESIDADE" . PHP_EOL;
    echo PHP_EOL;
}   