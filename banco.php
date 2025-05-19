<?php
function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

$contaCorrente = [
    "123.456.789-10" => [
        "titular" => "Fernando Morais",
        "saldo" => 10000,
    ],
    "123.456.789-11" => [
        "titular" => "Mikael Lucca",
        "saldo" => 300,
    ],
    "123.456.789-12" => [
        "titular" => "Neuzimar Santos",
        "saldo" => 100,
    ],
];



if(500 > $contaCorrente["123.456.789-10"]["saldo"]){
    echo "voce nao pode sacar esse valor da conta do Mikael" . PHP_EOL;
}else{
    $contaCorrente ["123.456.789-10"]["saldo"] -= 500;
}

if(500 > $contaCorrente["123.456.789-11"]["saldo"]){
    echo "voce nao pode sacar esse valor da conta do Mikael" . PHP_EOL;
}else{
    $contaCorrente ["123.456.789-11"]["saldo"] -= 500;
}


foreach ($contaCorrente as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta["titular"] . " " . $conta["saldo"]);
}