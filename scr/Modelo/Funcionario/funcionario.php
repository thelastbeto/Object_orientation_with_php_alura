<?php

namespace Projeto\Banco\Modelo\Funcionario;

use Projeto\Banco\Modelo\Pessoa;
use Projeto\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa // funcionário é uma pessoa;
{
    private float $salario;

    public function __construct(string $nome, CPF $cpf,  float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if($valorAumento < 0){
            echo "aumento deve ser positivo";
            return;
        }
        $this->salario += $valorAumento;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao():float;
}