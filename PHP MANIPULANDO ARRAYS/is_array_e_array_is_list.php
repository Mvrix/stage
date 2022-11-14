<?php

$notas = [
    'Mario' => 1,
    'Ana' => 10,
    'Caio' => 5,
    'Luan' => 3
];

asort($notas);
var_dump($notas);

if (is_array($notas)){
    echo "Isso é uma Array" . PHP_EOL;
}

var_dump(array_is_list($notas)); //verificação de tipo de array - se é possivel usar for para percorrer array