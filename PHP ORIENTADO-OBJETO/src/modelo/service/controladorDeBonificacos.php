<?php

namespace Stage\Banco\Service;

use Stage\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private float $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario): void
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}
