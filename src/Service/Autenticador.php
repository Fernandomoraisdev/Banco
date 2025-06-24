<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Autenticavel;

class Autenticador
{
    public function tentaLogin (Autenticavel $autenticavel, string $senha): void
    {
        if ($diretor->autenticar($senha)){
            echo "Ok. Usuario logado com sucesso";
        }else{
            "Ops. Senha incorreta";
        }
    }
}