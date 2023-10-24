<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);// se colocarmos 0, ele não exibe nenhum erro.

set_error_handler(function ($errno){
    switch ($errno) {
        case E_NOTICE:
            echo "Cuidado ai...Melhor pensar melhor ao deixar o código assim...\n";
            break;
        case E_WARNING:
            echo "Oh my god!! Desfaça isso agora, meu broww!!\n";
            break;
    }
        
});

echo $variavel;
echo $array[12];


// echo CONSTANTE;