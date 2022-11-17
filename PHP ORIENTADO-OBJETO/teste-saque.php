<?php

use Stage\Banco\Modelo\{CPF, Endereco, Pessoa};
use Stage\Banco\Modelo\Conta\{Conta, ContaCorrente, Titular};



require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular("123.123.132-12"), "Mario" ,
    new endereco("Soro", "wanel", "rua", "9"));

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
