<?php

use Projeto\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Jaboatão',
    'Candeias',
    'Av. Leo Messi',
    '2299'
);

$outroEndereco = new Endereco(
    'Recife',
    'Cordeiro',
    'Papis Mora',
    '201'
);

echo $umEndereco;
echo $outroEndereco;