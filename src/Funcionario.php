<?php

class Funcionario extends Pessoa
{
    private string $nome;
    private string $cpf;
    private string $cargo;

    public function __construct(string $nome, string $cpf, string $cargo)
    {
        $this->cargo = $cargo;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf;
    }

    public function recuoeraCargo(): string
    {
        return $this->cargo;
    }




}