<?php

namespace Stage\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{

    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}
