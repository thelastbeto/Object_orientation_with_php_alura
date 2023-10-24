<?php

namespace Projeto\Banco\Modelo\Conta;

use Projeto\Banco\Modelo\Pessoa;
use Projeto\Banco\Modelo\Endereco;
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Autenticavel;
//Ele vai utilizar a Classe Pessoa que está com o caminho desse NameSpace;

class Titular extends Pessoa implements Autenticavel// titular é uma pessoa;
{

    private Endereco $endereco;
    public function __construct(string $nome, CPF $cpf, Endereco $endereco)
    {
        //parent: estamos chamando o construtor da classe mãe (Pessoa);
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }


    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha == 'abcd';
    }

}

