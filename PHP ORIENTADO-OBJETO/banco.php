<?php 

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$mario =  new Titular(new CPF('123.456.789-10'), 'Mario Elias');


$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;


echo Conta::recuperaNumeroDeContas();
