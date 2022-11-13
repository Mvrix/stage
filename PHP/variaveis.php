<?php

$idade = 16;
$nome = "Mario";
$numerodepessoas = 1;

echo "ola mundo, minha idade é  $idade anos" . PHP_EOL;


echo "Você só pode entrar se for maior de 18 anos" . PHP_EOL;

if ($idade >= 18 && $nome == "Mario") {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar" . PHP_EOL;
} else {
    echo "Você não pode entrar, sua idade é $idade e você se chama $nome";
}

echo PHP_EOL;
echo "Adeus";
