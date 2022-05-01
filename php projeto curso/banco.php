<?php
require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$cliente = new Titular(new CPF('123.456.789-10'), 'Matheus');
$primeiraConta = new Conta($cliente);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperaNomeTitular().PHP_EOL;
echo $primeiraConta->recuperaCpfTitular().PHP_EOL;
echo $primeiraConta->recuperaSaldo().PHP_EOL;

$amanda = new Titular(new CPF('109.876.543-12'), 'Amanda');
$segundaConta = new Conta($amanda);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcde'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
