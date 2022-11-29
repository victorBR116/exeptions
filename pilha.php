<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    
    funcao2();
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    for ($i = 1; $i <= 5; $i++){
        echo 'Salve';
    }
}