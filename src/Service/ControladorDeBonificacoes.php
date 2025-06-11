<?php

namespace Alura\Banco\Service;

class ControladorDeBonificacoes
{
    private $totalBonificacao = 0;
    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacao += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacao;
    }
}