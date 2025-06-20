<?php

namespace Banco\Service;

class Autenticador
{
    public function tentaLogin (Diretor $diretor, string $senha): bool
    {
        if ($diretor->autenticar($senha)){
            echo "Ok. Usuario logado com sucesso";
        }else{
            "Ops. Senha incorreta";
        }
    }
}