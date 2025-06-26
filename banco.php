<?php

require_once 'autoload.php';

use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Conta\Conta;


$endereco = new Endereco("Duque de Caxias", "bairro 1", "Rua 2", "157b");
$fernando = new Titular( new CPF("123.456.789-10"),'Fernando Morais', $endereco);
$primeiraConta = new Conta($fernando);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$mikael = new Titular(new CPF('123.456.789-11'), 'Mikael Lucca', $endereco);//recebendo o mesmo endereco de fernando
$segundaConta = new Conta($mikael);
var_dump($segundaConta);

$outroEndereco = new Endereco("Duque de Caxias", "Lote 15", "Catar", "253");
$outra = new Conta(new Titular(new CPF('123.456.789-12'), 'Neuzimar Santos', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
