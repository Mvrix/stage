<?php 

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.123.123-00', 'Mario');
var_dump($primeiraConta);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;


echo Conta::recuperaNumeroDeContas();

?>