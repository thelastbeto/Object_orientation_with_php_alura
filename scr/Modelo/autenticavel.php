<?php

namespace Projeto\Banco\Modelo;

interface Autenticavel //interface = contrato;
{
     public function podeAutenticar(string $senha): bool;
}