<?php
require_once 'src/Model/CPF.php';
require_once 'src/Model/Endereco.php';
require_once 'src/Model/Pessoa.php';
require_once 'src/Model/Conta/Conta.php';
require_once 'src/Model/Conta/Titular.php';

use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Conta\Conta;
use Alura\Banco\Model\Conta\Titular;

$endereco = new Endereco("Duque de Caxias", "Pilar", "Rua Carlos Alvear", "606");
$cpf = new CPF('123.456.789-10');
$fernando = new Titular($cpf, 'Fernando Morais', $endereco);
$primeiraConta = new Conta($fernando);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$endereco1 = new Endereco("Duque de caxias", "Gramacho", "Arpoador", "15");
$mikael = new Titular(new CPF('123.456.789-11'), 'Mikael', $endereco1);
$segundaConta = new Conta($mikael);
var_dump($segundaConta);

$endereco2 = new Endereco("Duque de Caxias", "Lote 15", "Catar", "253");
$neuzimar = new Titular(new CPF('123.456.789-12'), 'Neuzimar', $endereco2);
$outra = new Conta($neuzimar);

echo Conta::recuperaNumeroDeContas();
unset($segundaConta);