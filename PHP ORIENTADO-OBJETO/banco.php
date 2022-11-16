<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$mario = new Titular(new CPF('123.456.789-10'), 'Mario');
$primeiraConta = new Conta($mario);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();