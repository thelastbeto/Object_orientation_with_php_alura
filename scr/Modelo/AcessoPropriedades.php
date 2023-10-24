<?php

namespace Projeto\Banco\Modelo;

trait AcessoPropriedades
{
    public function __set($nomeAtributo, $valorAtributo)
    {
        $metodo = 'Atribui' . ucfirst($nomeAtributo) . PHP_EOL . 'Atribui' . $valorAtributo;
        return $this->$metodo();
    }
}