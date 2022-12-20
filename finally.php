<?php

try{
    echo "executando código" . PHP_EOL;
    //throw new Exception('Excecão aqui.');
}catch(Throwable $e ){
    echo "Caindo no cath" . PHP_EOL;
} finally {
    echo "Finally" . PHP_EOL;
}