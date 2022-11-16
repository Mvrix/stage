<?php

class Conta
{

    private $titular;

    private $saldo = 0;

    private static $numeroDeContas = 0;



    public function  __construct(string $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        if (self::$numeroDeContas > 2) {
            echo "Há mais de uma conta ativa";
        }
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

    public function transferir(float $valorAtransferir, Conta $contaDestino)
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

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }


    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}
