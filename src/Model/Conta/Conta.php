<?php
namespace Alura\Banco\Model\Conta;


abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static $numeroDeContas = 0;


    public function __construct(Titular  $titular )
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;

    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;

        if($valorSaque > $this->saldo) {
            echo "Saldo indisponivel";
            return;
        }
        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if($valorADepositar < 0) {
            echo "O Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    protected function percentualTarifa(): float;



}