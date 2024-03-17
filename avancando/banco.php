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
    valorASacar:200
);

$contaCorrentes['123.256.789-12'] = depositar(
    $contaCorrentes['123.256.789-12'],
    valorADepositar:100
);

unset($contaCorrentes['123.456.689-11']);

titularComLetrasMaiusculas($contaCorrentes ['123.256.789-12']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ir=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contaCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>
                Saldo: <?= $conta['saldo'];?>
            </dd>
            <?php } ?>
    </dl>
</body>
</html>