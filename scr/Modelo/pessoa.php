<?php

namespace Projeto\Banco\Modelo;
//Espaço onde está localizado o arquivo;
// use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\validaPessoaException;

class Pessoa
{

    use AcessoPropriedades;
    protected string $nome;
    //protected = nome acessível pelas classes filhas;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this -> validaNomeTitular($nome);
        $this-> nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    protected function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular) > 5) {
            throw new validaPessoaException($nomeTitular);
            //codigo privado pois só foi acessível dentro do construtor;
            //utilizamos o método protected, então, este método só poderá ser acessado na classe mãe e nas classes filhas;
            
        }
    }
}