<?php
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

function sacar(array $conta, float $valorASacar): array
{
    if($valorASacar > $conta["saldo"]){
        echo "voce nao pode sacar esse valor" . PHP_EOL;
    }else{
        $conta["saldo"] -= $valorASacar;
    }
    return $conta;
}

function exibeMensagem(string $mensagem): void
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar): array
{
    if($valorADepositar > 0) {
        $conta["saldo"] += $valorADepositar;
    }else{
        exibeMensagem("Depoisitos precisam ser positivos");
    }
    return $conta;
}


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

foreach ($contaCorrente as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta["titular"] . " " . $conta["saldo"]);
}