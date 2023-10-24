<?php

namespace Projeto\Banco\Modelo;

// require_once 'src/Modelo/Conta/Conta.php';
// require_once 'src/Modelo/endereco.php';
// require_once 'src/Modelo/Conta/titular.php';
// require_once 'src/Modelo/cpf.php';
// require_once 'src/Modelo/pessoa.php';

require_once 'autoload.php';

use Projeto\Banco\Modelo\Conta\{Titular, Conta};
use Projeto\Banco\Modelo\{CPF, Endereco};


$endereco = new Endereco('Jaboatão dos Guararapes', 'Knd', 'Betnc', '7');
$roberto = new Titular('Roberto Jr',new CPF('122.555.103-66'), $endereco);
$primeiraConta = new Conta($roberto);
$primeiraConta ->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarSaldo();
// echo $primeiraConta->recuperaCpfTitular();

$endereco = new Endereco('Jaboatão dos Guararapes', 'Knd', 'Betnc', '7');
$duda = new Titular('Maria Eduarda', new CPF('222.111.444-56'), $endereco);
$segundaConta = new Conta($duda);
$segundaConta ->depositar(400000);
$segundaConta ->sacar(5000);

echo $segundaConta->recuperarSaldo();
// echo $segundaConta->recuperaCpfTitular();