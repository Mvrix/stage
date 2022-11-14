<?php

$notas = [
    [
        'aluno' => 'Mario',
        'nota' => 9,
    ],
    [
        'aluno' => 'Bia',
        'nota' => 10,
    ],
    [
        'aluno' => 'Alan',
        'nota' => 5,
    ]
];

function ordenaNotas(array $nota1, array $nota2) : int
{
    if ($nota1['nota'] > $nota2['nota']){
        return -1;
    }
    if ($nota2['nota'] > $nota1['nota']){
        return 1;
    }

        return 0;
}

usort($notas , 'ordenaNotas');  // não modificando a variavel

var_dump($notas);