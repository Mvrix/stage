<?php

namespace Stage\Banco\Modelo\Funcionario;
use Stage\Banco\Modelo\Pessoa;
use Stage\Banco\Modelo\CPF;
use Stage\Banco\Modelo\Service\Autentica;

class Gerente extends Funcionario
{
    public function calculoBonificacao(): float
    {
        return $this->recuperaSalario();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}