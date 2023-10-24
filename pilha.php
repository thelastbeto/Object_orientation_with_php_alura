<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    try {
        funcao2();
    } catch (Throwable $problema) //estou buscando qualquer exception ou posso utilizar Throwable e aí estou pegando qualquer coisa; erro ou exceção.
    //Para melhor leitura de código, seria melhor colocarmos a exceção específica que pode retornar em tal bloco de código;
    {
        echo $problema->getMessage() . PHP_EOL;
        echo $problema->getLine() . PHP_EOL;
        echo $problema->getTraceAsString() . PHP_EOL;
    }

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    throw new RuntimeException('Enviando uma excessão for you, baby');

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
