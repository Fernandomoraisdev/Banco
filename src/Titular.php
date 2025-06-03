<?php

class Titular
{
    public CPF $cpf;
    private string $nome;
    private Endereco $endereco;


    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function recuperaCpfTitular (): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNomeTitular (): string
    {
        return $this->nome;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

}