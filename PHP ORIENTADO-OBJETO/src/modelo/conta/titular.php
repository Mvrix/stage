<?php

namespace Stage\Banco\Modelo\Conta;
use Stage\Banco\Modelo\Pessoa;
use Stage\Banco\Modelo\Endereco;
use Stage\Banco\Modelo\CPF;
use Stage\Banco\Modelo\Service\Autentica;

class Titular extends Pessoa
{
    private Endereco $endereco;
    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}
