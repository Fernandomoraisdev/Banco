<?php

namespace Banco\Service;

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