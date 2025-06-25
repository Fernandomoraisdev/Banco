<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Autenticavel;


Abstract class Diretor extends Funcionario implements Autenticavel
{
    public function calculaSalario()
    {
        return $this->recuperaSalario() * 2;
    }
    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }

}