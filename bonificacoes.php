<?php
require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Model\{CPF};
use Alura\Banco\Model\Funcionario\{Funcionario, Gerente};

$funcionario1 = new Funcionario(
    "Gracielle Ferreira",
    new CPF("123.456.789-16"),
    "Desenvolvedor",
    2500
);

$funcionario2 = new Gerente(
    "Giovana Santos",
    new CPF("123.456.789-17"),
    "Gerente",
    3000
);

$funcionario3 = new Diretor(
    "Neuzimar Santos",
    new CPF("123.456.789-20"),
    "Diretor",
    5000
);

$controlador =  new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($funcionario1);
$controlador->adicionaBonificacaoDe($funcionario2);

echo $controlador->recuperaTotal();