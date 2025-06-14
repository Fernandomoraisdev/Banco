<?php

namespace Banco\Model\Funcionario;

use Alura\Banco\Model\Funcionario\Funcionario;

class Diretor extends Funcionario
{
    public function calculaSalario()
    {
        return $this->recuperaSalario() * 2;
    }
    public function podeAutenticar(): bool
    {
        return $senha === '1234';
    }

}