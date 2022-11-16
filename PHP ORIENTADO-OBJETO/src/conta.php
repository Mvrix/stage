<?php 

class Conta
{
    public $cpfTitular;
    public $nomeTitular;
    public $saldo;
    
    public function sacar(float $valorASacar) {
        if ($valorASacar >= $saldo) {
            echo "Saldo indisponivel";
        } else {
            $saldo -= $valorASacar;
        }
    }
}


?>