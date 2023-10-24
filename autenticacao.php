<?php

use Projeto\Banco\Modelo\Funcionario\Diretor;
use Projeto\Banco\Modelo\Service\Autenticador;
use Projeto\Banco\Modelo\CPF;


require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    "Leo Messi",
    new CPF('111.111.111-11'),
    9000
);

$autenticador->tentaLogin($umDiretor, '1234');