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

$alunos2022 = array_merge($alunos2021, $novosAlunos);

var_dump($alunos2022);