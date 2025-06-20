<?php
require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Banco\Model\Funcionario\EditorVideo;
use Alura\Banco\Model\{CPF};
use Alura\Banco\Model\Funcionario\{Gerente, Desenvolvedor};


$funcionario4 = new Funcionario(
    'Fernando Santos',
    new CPF("123.456.789-23"),
    10000
);

$funcionario4->sobeDeNivel();

$funcionario1 = new Funcionario(
    "Gracielle Ferreira",
    new CPF("123.456.789-16"),
    2500
);

$funcionario2 = new Gerente(
    "Giovana Santos",
    new CPF("123.456.789-17"),
    2000
);

$funcionario3 = new Diretor(
    "Neuzimar Santos",
    new CPF("123.456.789-20"),
    4000
);

$funcionario5 = new EditorVideo(
    "paulo",
    new CPF ("123.456.789-25"),
    1500
);


$controlador =  new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($funcionario1);
$controlador->adicionaBonificacaoDe($funcionario2);
$controlador->adicionaBonificacaoDe($funcionario3);
$controlador->adicionaBonificacaoDe($funcionario4);
$controlador->adicionaBonificacaoDe($funcionario5);

echo $controlador->recuperaTotal();