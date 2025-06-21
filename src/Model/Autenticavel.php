<?php

namespace Banco\Model;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}