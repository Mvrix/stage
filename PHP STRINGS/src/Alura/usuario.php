<?php

namespace App\Alura;

class usuario
{

    private $nome;
    private $sobrenome;
    private $senha;
    private $tratamento;

    public function __construct(string $nome, string $senha, string $genero)
    {
        $this->validaSenha($senha); 
        $NomeSobrenome = explode(" ", $nome, 2);
        $this->adicionaTratamentoAoSobrnome($nome, $genero);

        if ($NomeSobrenome[0] === "")
        {
            $this->nome = "Nome invalido";
        } else { 
            $this->nome = $NomeSobrenome[0];
        }

        if ($NomeSobrenome[1] === null)
        {
            $this->sobrenome = "Sobrenome invalido";
        } else { 
            $this->sobrenome = $NomeSobrenome[1];
        }
    }

    private function adicionaTratamentoAoSobrnome(string $nome, string $genero)
    {
        if($genero === "M")
        {
            $this->tratamento = preg_replace('/^(\w+)\b/', 'Sr.', $nome, 1);
        }
        if ($genero === "F")
        {
            $this->tratamento = preg_replace('/^(\w+)\b/', 'Sra.', $nome, 1);
        }
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getTratamento(): string
    {
        return $this->tratamento;
    }


    private function validaSenha(string $senha): void
    {
        $tamanhoSenha = strlen(trim($senha));

        if ($tamanhoSenha > 6){
            $this->senha = $senha;
        } else {
        $this->senha = "senha invalida!";
        }
    }
}
