<?php
namespace Alura\Banco\Model;


class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo, Endereco $endereco)
    {
        parent::__construct($nome, $cpf, $endereco);
        $this->cargo = $cargo;
        $this->endereco = $endereco;
    }

    public function recuoeraCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }


}