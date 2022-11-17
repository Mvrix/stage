<?php

use Stage\Banco\Modelo\{CPF, Endereco, Pessoa};
use Stage\Banco\Modelo\Conta\{Conta, ContaCorrente, Titular};



require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular('Mario', new CPF('987.654.321-01'),
        new Endereco('Sorocaba', 'wanel Teste', 'Rua', '25')
    )
);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();
