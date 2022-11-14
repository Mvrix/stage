<?php

function exibeMensagem ($mensagem) {
    echo $mensagem . PHP_EOL;
}

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


if (500 > $contasCorrentes ['123.456.789-04']['saldo']){
    exibeMensagem("Você não pode sacar");
} else{
    $contasCorrentes ['123.456.789-04']['saldo'] -= 500;
}



foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem ($cpf . " " . $conta['saldo']);
}

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . PHP_EOL;
}