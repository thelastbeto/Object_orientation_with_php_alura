<?php

namespace Projeto\Banco\Modelo;

class validaPessoaException extends \DomainException
{
    public function __construct(string $nomeTitular){
    
    $mensagem = "Você tentou implementar um nome de titular com menos de 5 caracteres, sendo o nome $nomeTitular";
    parent::__construct($mensagem);
    }
}