<?php


namespace Projeto\Banco\Modelo\Conta;
class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $mensagem = "Você tentou sacar o valor $valorSaque, porém, só possui o valor $saldoAtual em conta";
        parent::__construct($mensagem);
        //Como estamos herdando de uma classe, precisamos, mesmo que de nosso modo, respeitar os valores do construtor.
        //Neste caso, conseguimos não utilizar os outros parâmetros, pois possuem valores padrão 0 e null;
    }
}

