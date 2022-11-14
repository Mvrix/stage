<?php

$notas = [
    'Mario' => null,
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

echo "Mario fez a prova: " . PHP_EOL;
var_dump(array_key_exists('Mario' , $notas)); //verifica se existe na array - melhor para uso de dados de fora (banco/url)

echo "Mario fez a prova: " . PHP_EOL;
var_dump(isset($notas['Mario'])); //verifica se existe na array e se é diferente de null


