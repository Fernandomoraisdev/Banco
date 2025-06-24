<?php

use Alura\Banco\Model\CPF;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\autenticacao;

require_once "autoload.php";

$autenticador = new Autenticador();
$funcionario3 = new Diretor("Aristoteles jones",
    new CPF('123.456.789-35'),
);

$autenticador->tentalogin($funcionario3, '1234');