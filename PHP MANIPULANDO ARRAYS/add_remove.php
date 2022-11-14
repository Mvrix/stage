<?php
$alunos2021 = [
    'Mario', 
    'Ana' ,
    'Caio',
    'Luan' 
];

$novosAlunos = [
    'Genoveva',
    'Tiburcio',
    'Pereira',
    'Filo'
];

// $alunos2022 = array_merge($alunos2021, $novosAlunos); //subscreve chaves, se for string a chave ira sobscrever - se for int as chaves não subscreve os dados porem perde as chaves antigas

$alunos2022 = [...$alunos2021, ...$novosAlunos];
array_push($alunos2022, 'bob', 'roger', 'florinda');
$alunos2022[] = 'Luiz';


echo array_unshift($alunos2022, 'Bruno', "Amanda") . PHP_EOL;

echo array_pop($alunos2022) . PHP_EOL;