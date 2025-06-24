<?php
require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\{Diretor, EditorVideo, Gerente, Desenvolvedor};


$umFuncionario = new Desenvolvedor(
        'Fernando Santos',
        new CPF('123.456.789-23'),
        1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    "Gracielle Ferreira",
    new CPF("123.456.789-16"),
    3000
);

$umDiretor = new Diretor(
    "Giovana Santos",
    new CPF("123.456.789-17"),
    5000
);

$umEditor = new EditorVideo(
    "Neuzimar Santos",
    new CPF("123.456.789-20"),
    1500
);


$controlador =  new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();