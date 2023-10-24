<?php

require_once 'autoload.php';

use Projeto\Banco\Service\controladorBnf;
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Funcionario\{Desenvolvedor, Gerente, Diretor, EditorVideo};

$umFuncionario = new Desenvolvedor(
    "Roberto Jr",
    new CPF('212.555.100-50'),
    1000
);

$umaFuncionaria = new Gerente(
    "Eduarda Araujo",
    new CPF('211.555.100-50'),
    5000
);

$umDiretor = new Diretor(
    "Marcela",
    new CPF('222.213.444.56'),
    10000
);

$umEditor = new EditorVideo(
    "Paulo",
    new CPF('222.213.333.22'),
    3000
);

$controlador = new controladorBnf();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);


echo $controlador->recuperaTotal();