<?php

namespace Alura;

class usuario
{

    private $nome;
    private $sobrenome;

    public function __construct(string $nome)
    {

        $nomeSobrenome = explode(" ", $nome, 2);

        if ($nomeSobrenome[0] === "")
        {
            $this->nome = "Nome invalido";
        } else { 
            $this->nome = $nomeSobrenome[0];
        }

        if ($nomeSobrenome[1] === null)
        {
            $this->sobrenome = "Sobrenome invalido";
        } else { 
            $this->sobrenome = $nomeSobrenome[1];
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
}
