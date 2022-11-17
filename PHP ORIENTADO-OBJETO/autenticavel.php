<?php

namespace Stage\Banco\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}