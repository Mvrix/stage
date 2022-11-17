<?php

namespace Stage\Banco\Modelo\Funcionario;
use Stage\Banco\Modelo\Pessoa;
use Stage\Banco\Modelo\CPF;

class Diretor extends Funcionario
{
    public function calculoBonificacao(): float
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha):bool
    {
        return $senha === 1234;
    }
}