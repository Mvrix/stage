<?php

$peso = 50;
$altura = 1.70;
$imc = $peso / $altura ** 2;

echo "Seu IMC é $imc. Você está com o IMC ";

if ($imc < 18) {
    echo "Baixo";
} elseif ($imc < 25){
    echo "Normal";
} elseif ($imc < 30) {
    echo "Acima";
}