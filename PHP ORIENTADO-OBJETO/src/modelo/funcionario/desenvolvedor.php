<?php
namespace Stage\Banco\Modelo\Funcionario;

use Stage\Banco\Modelo\Funcionario;


class Desenvolvedor extends Funcionario
{
    public function sobeDeNivel()
    {
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }
}