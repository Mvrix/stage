<?php

$notas = [
    10,
    2,
    7,
    8
];

$notasOrdenadas = $notas;
sort($notasOrdenadas);  // modificando a variavel

echo "Notas desordenadas: ";
var_dump($notas);


echo "Notas ordenadas: ";
var_dump($notasOrdenadas);