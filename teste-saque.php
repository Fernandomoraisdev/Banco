<?php

use Alura\Banco\Model\Conta\{Titular, ContaPoupanca, ContaCorrente};
use Alura\Banco\Model\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca (
    new Titular(new CPF('123.456.789-15'),
        'Flavia Morais',
        new Endereco("caxias", "Bairro 3", "Rua f0", "123b")
    )
);
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();