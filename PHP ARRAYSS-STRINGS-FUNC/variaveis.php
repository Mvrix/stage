<?php

$conta1 = [
    'titular' => 'Mario',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Joao',
    'saldo' => 1200
];

$conta3 = [
    'titular' => 'Ursolinda',
    'saldo' => 9000
];

$conta4 = [
    'titular' => 'Bia',
    'saldo' => 8000
];

$contasCorrentes = [$conta1, $conta2, $conta3, $conta4];



for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i] ['titular'] . PHP_EOL;
}