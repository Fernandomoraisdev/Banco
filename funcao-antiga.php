<?php
function sacar(array $conta, float $valorASacar): array
{
    if($valorASacar > $conta["saldo"]){
        echo "voce nao pode sacar esse valor" . PHP_EOL;
    }else{
        $conta["saldo"] -= $valorASacar;
    }
    return $conta;
}

function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
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

function titularComLetrasMaiusculas(array &$conta)
{
   $conta["titular"] = mb_strtoupper($conta['titular']);
}

echo "<ul>";
foreach ($contaCorrente as $cpf => $conta) {
    exibeConta($conta);
}
echo "</ul>";

