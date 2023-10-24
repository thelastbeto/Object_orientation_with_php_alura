<?php

function a(): int
{
    try {
        echo "Código";
        return 0;
    } catch (Throwable $e){
        echo "Problema";
        return 1;
    } finally {
        echo "Final da execução";
    }
}

echo a();

/*O bloco finally é executado mesmo que nos blocos try 
ou catch existam uma instrução que interrompa a execução do método, como return ou throws. */

