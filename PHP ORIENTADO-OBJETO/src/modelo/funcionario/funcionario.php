<?php

namespace Stage\Banco\Modelo\Funcionario;
use Stage\Banco\Modelo\Pessoa;
use Stage\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa
{
    private string $cargo;
    private int $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario():float
    {
        return $this->salario;
    }

    abstract public function calculoBonificacao();
}
