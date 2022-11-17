<?php

use Stage\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Soro',
    'bairro qualquer',
    'Minha rua',
    '25'
);

echo $umEndereco;