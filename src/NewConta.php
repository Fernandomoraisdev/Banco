<?php
require 'src/Conta.php';

$primeiraConta = new Conta(
    $cpfTitular = '123.456.789.10',
    $nomeTitular = 'Fernando Morais',
    $saldo = 350
);

$segundaConta = new Conta(
    $cpfTitular = '123.456.789.11',
    $nomeTitular = 'Mikael Lucca',
    $saldo = 850
);