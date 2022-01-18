<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try{
        funcao2();
    } catch (DivisionByZeroError | RuntimeException $erro){
        echo "{$erro->getMessage()} at line {$erro->getLine()}" . PHP_EOL;
    }
    echo 'Saindo da função 1' . PHP_EOL;
}


function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    $arrayFixo = new SplFixedArray(2);
    $arrayFixo[3] = 2;
    $divisao = intdiv(5, 0);
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
