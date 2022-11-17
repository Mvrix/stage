<?php
namespace Stage\Banco\Modelo\Funcionario;
use Stage\Banco\Modelo\Pessoa;
use Stage\Banco\Modelo\CPF;


class Desenvolvedor extends Funcionario
{
    public function sobeDeNivel()
    {
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }
}