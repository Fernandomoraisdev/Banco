<?php

namespace Alura\Banco\Model\Funcionario;

trait AcessoPropriedade
{
    public function  __get(String $nomeAtributo)
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}