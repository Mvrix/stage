<?php

include 'funcoes-bank.php';

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



foreach ($contasCorrentes as $cpf => $conta)
{
    exibeMensagem (
        "O CPF é: $cpf, nome da pessoa {$conta['titular']} o saldo é: {$conta['saldo']}"
    );
}
