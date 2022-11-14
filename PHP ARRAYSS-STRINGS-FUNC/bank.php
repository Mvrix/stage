<?php

function sacar(array $conta, float $valorASacar) : array
{
    if ($valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar");
    } else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function deposito(array $conta, float $valorADepositar) : array
{
    if ($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
        
    } else {
        exibeMensagem("você só pode depositar valor positivos");
    }
    return $conta;
}

function exibeMensagem (string $mensagem) 
{
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

//saque
$contasCorrentes['123.456.789-04'] = sacar($contasCorrentes ['123.456.789-04'], 500);

//deposito
$contasCorrentes['123.456.789-01'] = deposito($contasCorrentes['123.456.789-01'], 9001);



foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem ($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}
