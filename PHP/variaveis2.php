<?php

$idade = 16;
$numerodepessoas = 8;

echo "ola mundo, minha idade é  $idade anos" . PHP_EOL;


echo "Você só pode entrar se for maior de 18 anos ou ";
echo "apartir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho" . PHP_EOL;
    echo "Pode entrar" . PHP_EOL;
} else if ($idade >= 16 && $numerodepessoas > 1) {
    echo "Você tem $idade e está acompanhado e pode entrar " . PHP_EOL;
} else {
    echo "Você não pode entrar, sua idade é de apenas $idade anos.";
}   



echo PHP_EOL;
echo "Adeus";