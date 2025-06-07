<?php

namespace Banco\Model\Conta;

use Banco\Model\Pessoa;
use Banco\Model\CPF;
use Banco\Model\Endereco;
class Titular extends Pessoa
{
    private Endereco $endereco;


    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

}