<?php

require_once 'autoload.php';

use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Conta\Conta;


$endereco = new Endereco("Duque de Caxias", "bairro 1", "Rua 2", "157");
$cpf = new CPF("123.456.789-10");
$fernando = new Titular( 'Fernando Morais', $cpf, $endereco);

$primeiraConta = new Conta($fernando);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$endereco1 = new Endereco("Duque de caxias", "Gramacho", "Arpoador", "15");
$cpf = new CPF('123.456.789-11');
$mikael = new Titular('Mikael Lucca', $cpf, $endereco1);

$segundaConta = new Conta($mikael);
var_dump($segundaConta);

$endereco2 = new Endereco("Duque de Caxias", "Lote 15", "Catar", "253");
$cpf = new CPF('123.456.789-12');
$neuzimar = new Titular('Neuzimar Santos', $cpf, $endereco2);

$outra = new Conta($neuzimar);

echo Conta::recuperaNumeroDeContas();
unset($segundaConta);