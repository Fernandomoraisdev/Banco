<?php
require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$endereco = new Endereco("Duque de Caxias", "Pilar", "Rua Carlos Alvear", "606");
$fernando = new Titular(new CPF('123.456.789-10'), 'Fernando Morais', $endereco);
$primeiraConta = new Conta($fernando);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta -> recuperaNomeTitular () . PHP_EOL;
echo $primeiraConta -> recuperaCpfTitular () . PHP_EOL;
echo $primeiraConta -> recuperaSaldo () . PHP_EOL;

$endereco1 = new Endereco("Duque de caxias", "Gramacho", "Arpoador", "15");
$mikael = new Titular(new CPF('123.456.789-11'), 'Mikael', $endereco1);
$segundaConta = new Conta($mikael);
var_dump($segundaConta);

$endereco2 = new Endereco("Duque de Caxias", "Lote 15", "Catar", "253");
$neuzimar = new Titular(new CPF('123.456.789-12'), 'Neuzimar', $endereco2);
$outra = new Conta($neuzimar);

echo Conta::recuperaNumeroDeContas();
unset($segundaConta);