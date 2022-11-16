<?php

class Conta
{

    private $cpfTitular;

    private $nomeTitular;

    private $saldo = 0;
    
    private static $numeroDeContas = 0;
    
    
   
    
    public function  __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
        
        self::$numeroDeContas++;
    }
    
    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponivel";
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorAtransferir, float $contaDestino): void
    {
        if ($valorAtransferir > $this->saldo) {
            echo "valor indisponivel";
            return;
        }
        $this->sacar($valorAtransferir);
        $contaDestino->depositar($valorAtransferir);
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }
    
    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }
            
    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }
    
    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome não é valido, precisa ter 5 caracteres";
            exit();
        }
    }
    
    public static function recuperaNumeroDeContas(): int 
    {
        return self::$numeroDeContas;
    }
}

?>