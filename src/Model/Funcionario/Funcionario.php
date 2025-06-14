<?php
namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Pessoa;

class Funcionario extends Pessoa
{
    private string $cargo;
    private string $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
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

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function calculaBonificacao(): float
    {
        if($this->cargo === 'Gerente'){
            return $this->salario;
        }
        return $this->salario * 0.1;
    }


}