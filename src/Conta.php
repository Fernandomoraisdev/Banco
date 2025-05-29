<?php
class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

    public function sacar(float $valorASacar): void
    {
        if($valorASacar > $this->saldo) {
            echo "Saldo indisponivel";
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponivel";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperarSaldo (): float
    {
        return $this->saldo;
    }

    public function defineCpfTitular(string $cpf): void
    {
       $this -> cpfTitular;
    }

    public function defineNomeTitular(string $nome): void
    {
       $this -> nomeTitular = $nome;
    }
    public function recuperarCpfTitular (): string
    {
        return $this -> cpfTitular;
    }
    public function recuperarNomeTitular (): string
    {
        return $this -> nomeTitular;
    }
}