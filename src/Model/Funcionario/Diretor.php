<?php

namespace Banco\Model\Funcionario;

use Alura\Banco\Model\Autenticavel;


class Diretor extends Funcionario implements Autenticavel
    public function calculaSalario()
    {
        return $this->recuperaSalario() * 2;
    }
    public function podeAutenticar(): bool
    {
        return $senha === '1234';
    }

}