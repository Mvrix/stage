<?php

require_once 'autoload.php';

use Stage\Banco\Modelo\Conta\Titular;
use Stage\Banco\Modelo\Endereco;
use Stage\Banco\Modelo\CPF;
use Stage\Banco\Modelo\Conta\Conta;


$endereco = new Endereco('Sorocaba', 'um bairro', 'rua', '25');
$mario = new Titular(new CPF('123.456.789-10'), 'Mario', $endereco);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpf() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
