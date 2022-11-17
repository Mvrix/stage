<?php

namespace Stage\Banco\Service;

use Stage\Banco\Modelo\Funcionario;
use Stage\Banco\Modelo\Funcionario\Funcionario as FuncionarioFuncionario;

class ControladorDebonificacoes
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(FuncionarioFuncionario $funcionario)
    {
        $funcionario->totalBonificacoes += $funcionario->calculoBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}
