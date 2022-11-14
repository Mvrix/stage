<?php

$notasBimestre1 = [
    'Mario' => 7,
    'Ana' => 10,
    'Caio' => 5,
    'Luan' => 3
];

$notasBimestre2 = [
    'Mario'=> 6,
    'Ana' => 9,
    'Caio' => 4,
    'Luan' => 8
];

var_dump(array_diff($notasBimestre1, $notasBimestre2));  //comparação de valores na array - retorna em uma nova array -array_diff

var_dump(array_diff_key($notasBimestre1, $notasBimestre2)); //comparação de dados na array 1 e 2 - retorna o dado que não está nas array 1 ou 2 - key

var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2)); //comparação de chaves e valores nas 2 arrays e retorna valor que não esta nas duas arrays -assoc - associação

