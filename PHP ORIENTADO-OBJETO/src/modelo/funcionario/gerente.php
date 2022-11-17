<?php

namespace Stage\Banco\Modelo\Funcionario;
use Stage\Banco\Modelo\Pessoa;
use Stage\Banco\Modelo\CPF;

class Gerente extends Funcionario
{
    public function calculoBonificacao(): float
    {
        return $this->recuperaSalario();
    }
}