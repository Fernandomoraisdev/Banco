<?php

use Alura\Banco\Model\CPF;
use Banco\Service\Autenticador;

require_once "autoload.php";

$autenticador = new Autenticador();
$funcionario3 = new Diretor("Aristoteles jones",
    new CPF('123.456.789-35'),
    10000
);

$autenticador->tentalogin($funcionario3, '1234');