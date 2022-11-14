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

var_dump(array_diff_key($notasBimestre1, $notasBimestre2));