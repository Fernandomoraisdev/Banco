<?php
require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$fernando = new Titular(new CPF('123.456.789-10'), 'Fernando Morais');
$primeiraConta = new Conta($fernando);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta -> recuperaNomeTitular () . PHP_EOL;
echo $primeiraConta -> recuperaCpfTitular () . PHP_EOL;
echo $primeiraConta -> recuperaSaldo () . PHP_EOL;

$mikael = new Titular(new CPF('123.456.789-11'), 'Mikael');
$segundaConta = new Conta($mikael);
var_dump($segundaConta);

$neuzimar = new Titular(new CPF('123.456.789-12'), 'Neuzimar');
$outra = new Conta($neuzimar);

echo Conta::recuperaNumeroDeContas();
unset($segundaConta);