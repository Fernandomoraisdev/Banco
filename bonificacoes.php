<?php
require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Model\{CPF, Funcionario};

$funcionario1 = new Funcionario(
    "Gracielle Ferreira",
    new CPF("123.456.789-16"),
    "Desenvolvedor",
    2500
);

$funcionario2 = new Funcionario(
    "Giovana Santos",
    new CPF("123.456.789-17"),
    "Gerente",
    3000
);

$controlador =  new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($funcionario1);
$controlador->adicionaBonificacaoDe($funcionario2);

echo $controlador->recuperaTotal();