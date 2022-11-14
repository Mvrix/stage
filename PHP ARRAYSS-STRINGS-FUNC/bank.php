<?php

require_once 'funcoes-bank.php';

$contasCorrentes = [
    '123.456.789-01' => [
        'titular' => 'Mario',
        'saldo' => 1000
    ],

    '123.456.789-02' => [
        'titular' => 'Joao',
        'saldo' => 1200
    ],

    '123.456.789-03' => [
        'titular' => 'Ursolinda',
        'saldo' => 9000
    ],

    '123.456.789-04' => [
        'titular' => 'Bia',
        'saldo' => 8000
    ]
];

$contasCorrentes ['123.456.789-05'] = [
    'titular' => 'Rob',
    'saldo' => 100
];

//saque
$contasCorrentes['123.456.789-04'] = sacar($contasCorrentes ['123.456.789-04'], 500);

//deposito
$contasCorrentes['123.456.789-01'] = deposito($contasCorrentes['123.456.789-01'], 9001);


capslock($contasCorrentes['123.456.789-01']);

unset($contasCorrentes['123.456.789-03']);

echo "<ul>";

foreach ($contasCorrentes as $cpf => $conta)
{
    exibeConta($conta);
}

echo "</ul>";
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <h1>Contas correntes</h1>
    <h2>feito em HTML</h2>
    <dl>
    <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>


    </dl>
    <script src="" async defer></script>
</body>

</html>
