<?php

namespace Stage\Banco\Service;
use Stage\Banco\Modelo\Funcionario\Diretor;

class Autentica
{
    public function tentaLogin(Diretor $diretor, string $senha): void
    {
        if ($diretor->podeAutenticar($senha))
        {
            echo "Ok! Usuario Logado no sistema.";
        } else {
            echo "Não foi possivel autenticar.";
        }
    }
}