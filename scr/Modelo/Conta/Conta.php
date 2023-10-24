<?php

namespace Projeto\Banco\Modelo\Conta;

use InvalidArgumentException;

// use Projeto\Banco\Modelo\Conta\Titular;

abstract class Conta
{
    //Atributos
    private Titular $titular; //public -> Qualquer um pode acessar;
    protected float $saldo;
    public static int $numeroDeContas = 0;
    //static -> atributo da classe;


    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
        //Estamos verificando quantas contas foram criadas acessando o atributo da propria classe por meio do método static;
    }
    //funcoes -> metodos;

    public function __destruct(){
        //instancia deixa de existir na memoria;
       self::$numeroDeContas--;
    }
    public function sacar(float $valorASacar):void
    {   
        //classe filha sobrescrevendo um método da classe mãe com a sobrescrita de métodos;
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if($valorSaque > $this->saldo){
            throw new SaldoInsuficienteException($valorSaque, $this->saldo);
        }
        
        $this->saldo -= $valorSaque;
    }
    public function depositar(float $valorADepositar):void
    {
        if($valorADepositar < 0){
           throw new InvalidArgumentException();
        }
        
        $this->saldo += $valorADepositar;
        
    }

    
    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
     {
         return $this->titular->getNome();
     }

    public function recuperaCpfTitular()
     {
         return $this-> titular ->getCpf();
     }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;
    //abstract -> todas as classes que extenderem essa classe, precisarão ter esse método;

}