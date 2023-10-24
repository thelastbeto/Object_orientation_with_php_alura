<?php

namespace Projeto\Banco\Modelo;
class Endereco 
{
    use AcessoPropriedades;
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    // métodos de acesso:

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }


    public function __toString():string
    {
        return "{$this->rua}, {$this->bairro}, {$this->numero}, {$this->cidade}";
    }

    public function __get(string $nomeAtributo)
    {
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }

    public function __set(string $nomeAtributo, string $valor):void
    {
        $metodo = 'altera' . ucfirst($nomeAtributo);
        $this ->$metodo($valor);
    }

   
}