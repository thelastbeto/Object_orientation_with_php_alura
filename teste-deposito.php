<?php

use Projeto\Banco\Modelo\Conta\ContaCorrente;
use Projeto\Banco\Modelo\Conta\Titular;
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular('Roberto Junior',
        new CPF('122.444.405-22'),
        new Endereco('Cidade', 'bairro', 'rua', 'numero')
    )
);

try{
    $contaCorrente->depositar(-100);
}   catch(InvalidArgumentException $exception)
        {
        echo "Valor a depositar precisa ser positivo, seu danadinho";
        }

