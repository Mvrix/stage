<?php

namespace Stage\Banco\Service;
use Stage\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tentaLogin(Diretor $diretor, string $senha): bool
    {
        if ($diretor->podeAutenticar($senha))
        {
            echo "Ok! Usuario Logado no sistema.";
        } else {
            echo "Não foi possivel autenticar.";
        }
    }
}