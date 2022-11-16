<?php

namespace App\Alura;

class Contato
{
    private $email;
    private $endereco;
    private $cep;
    private $telefone;

    public function __construct(string $email, string $endereco, string $cep, string $telefone)
    {
        $this->email = $email;
        $this->endereco = $endereco;
        $this->cep = $cep;
        
        if ($this->validaEmail($email) !== false)
        {
            $this->validaEmail($email);
        } else
        {
            $this->validaEmail("E-mail invalido");
        }
        
        if ($this->validaTelefone($telefone)){
            $this->telefone = $telefone;
        } else {
            $this->telefone = "Telefone inválido";

        }
    }

    public function getUsuario(): string
    {
        $posicaoArroba = strpos($this->email, "@");
        
        if ($posicaoArroba === false) {
            return "Usuario invalido";
        }

        return substr($this->email, 0, $posicaoArroba);
    }


    private function validaEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    private function validaTelefone(string $telefone): int
    {
        return preg_match('/^[0-9]{4}-[0-9]{4}$/', $telefone, $encontrados);
    }

    private function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getEnderecoCep(): string
    {
        $enderecoCep = [$this->endereco, $this->cep];
        return implode(" - ", $enderecoCep);
        
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }
    
}