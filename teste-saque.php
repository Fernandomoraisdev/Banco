<?php

use Alura\Banco\Model\Conta\ContaCorrente;
use Alura\Banco\Model\Conta\Conta;
use Alura\Banco\Model\Conta\ContaPoupanca;
use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Endereco;

require_once 'autoload.php';

$conta = new ContaCorrente (
    new Titular(new CPF('123.456.789-15'),
        'Flavia Morais',
        new Endereco("caxias", "Bairro 13", "Rua f0", "123b")
    )
);
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();