<?php

use Stage\Banco\Modelo\CPF;
use Stage\Banco\Modelo\Funcionario\Diretor;
use Stage\Banco\Service\Autentica;

require_once 'autoload.php';

$autenticador = new Autentica();
$umDiretor = new Diretor('João jose', new CPF('123.123.123-00'), 10000);

$autenticador->tentaLogin($umDiretor, '1234');
