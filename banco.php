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

?>



<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach ($contaCorrente as $cpf => $conta) { ?>
        <dt>
            <h3><?=  $conta['titular'];?> - <?= $cpf; ?> </h3>
        </dt>
        <dd>
            Saldo:<?= $conta['saldo'];?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>
