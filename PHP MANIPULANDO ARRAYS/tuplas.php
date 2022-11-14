<?php
$dados = [
    'nome' => 'Mario', 
    'nota' => 10, 
    'idade' => 22,
];

//list($nome, $nota, $idade) = $dados;

extract($dados); //pega uma array e transforma em variaveis

var_dump($nome, $nota, $idade);

var_dump(compact("nome", "nota", "idade")); //cria uma array - usado em html para ciração de arrays dentro do php :O