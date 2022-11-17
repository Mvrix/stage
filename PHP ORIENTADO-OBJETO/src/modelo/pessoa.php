<?php

class Pessoa
{
    protected $nome;
    protected $cpf;
    

    public function __construct(string $nome, CPF $cpf)
    {   
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
        
    }
    
    public function recuperaNome()
    {
        return $this->nome;
    }
    
    public function recuperaCpf()
    {
        return $this->cpf;
    }

    protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}