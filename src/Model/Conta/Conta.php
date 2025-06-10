<?php
namespace Alura\Banco\Model\Conta;


class Conta
{
    private Titular $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    /**
     * @var int $tipo 1 == Conta corrente; 2 == poupanca
     */
    private $tipo;

    public function __construct(Titular  $titular, int $tipo )
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
        $this->tipo = $tipo;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        if ($this->tipo === 1) {
            $tarifaSaque = $valorASacar * 0.05;
        }else {
            $tarifaSaque =  $valorASacar * 0.03;
        }
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
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo insuficiente";
            return;
        }
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
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

}