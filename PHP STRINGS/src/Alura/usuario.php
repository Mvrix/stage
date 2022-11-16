<?php

namespace App\Alura;

class usuario
{

    private $nome;
    private $sobrenome;
    private $senha;

    public function __construct(string $nome, string $senha)
    {
        $this->validaSenha($senha); 

        $NomeSobrenome = explode(" ", $nome, 2);

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
