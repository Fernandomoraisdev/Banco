<?php

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once "autoload.php";

$autenticador = new Autenticador();
$umDiretor = new Diretor("Aristoteles jones",
    new CPF('123.456.789-35'),
10000
);

$autenticador->tentaLogin($umDiretor, '4321');