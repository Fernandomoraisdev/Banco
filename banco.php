<?php

require_once 'funcao.php';

$contaCorrente = [
    "123.456.789-10" => [
        "titular" => "Fernando Morais",
        "saldo" => 10000,
    ],
    "123.456.789-11" => [
        "titular" => "Mikael Lucca",
        "saldo" => 3000,
    ],
    "123.456.789-12" => [
        "titular" => "Neuzimar Santos",
        "saldo" => 1000,
    ],
];

$contaCorrente["123.456.789-10"] = sacar(
    $contaCorrente["123.456.789-10"],
    500
);
$contaCorrente["123.456.789-11"] = sacar(
    $contaCorrente["123.456.789-11"],
    500
);
$contaCorrente["123.456.789-12"] = sacar(
    $contaCorrente["123.456.789-12"],
    500
);


$contaCorrente["123.456.789-10"] = depositar(
    $contaCorrente["123.456.789-10"],
    70
);
$contaCorrente["123.456.789-11"] = depositar(
    $contaCorrente["123.456.789-11"],
    400
);
$contaCorrente["123.456.789-12"] = depositar(
    $contaCorrente["123.456.789-12"],
    5000
);

titularComLetrasMaiusculas($contaCorrente ["123.456.789-10"]);
titularComLetrasMaiusculas($contaCorrente ["123.456.789-11"]);
titularComLetrasMaiusculas($contaCorrente ["123.456.789-12"]);

unset($contaCorrente["123.456.789-10"]);

foreach ($contaCorrente as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem(
        "$cpf $titular $saldo"
    );

}

