<?php

use Alura\Banco\Model\Endereco;

require_once "autoload.php";

$umEndereco = new Endereco("duque de caxias", "pilar", "feliz", "54");
$outroEndereco = new Endereco("duque de caxias", "matriz", "malao",  "68");

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;