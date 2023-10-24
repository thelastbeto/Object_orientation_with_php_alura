<?php 

namespace Projeto\Banco\Modelo\Conta;
Class ContaCorrente extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.03;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo){
            echo "Saldo indisponível";
            return;
        } 
        
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    
    }
}