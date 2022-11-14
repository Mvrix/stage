<?php

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres'
];

$contado = 0;

foreach ($array as $numeral => $nomeDoNumero) {
    echo "$numeral em portugues é: $nomeDoNumero" . PHP_EOL;
}

echo "Total: " . count($array) . PHP_EOL;
