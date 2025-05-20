<?php
function sacar($conta, $valorASacar)
{
    if($valorASacar > $conta["saldo"]){
        echo "voce nao pode sacar esse valor" . PHP_EOL;
    }else{
        $conta["saldo"] -= $valorASacar;
    }
    return $conta;
}

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

function depositar($conta, $valorADepositar){
    $conta["saldo"] += $valorADepositar;
    return $conta;
}

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
    700
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