<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';


$endereco = new Endereco('Sorocaba', 'um bairro', 'rua', '25');
$mario = new Titular(new CPF('123.456.789-10'), 'Mario', $endereco);
$primeiraConta = new Conta($mario);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$outroEndereco  = new Endereco('A', 'B', 'R', '89');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $endereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();