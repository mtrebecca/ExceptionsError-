<?php

$arquivo = fopen(filename: 'temp.txt', mode:'w');

try {
    echo "Executando" . PHP_EOL;
    throw new Exception(message: 'Exceção aqui');
} catch (Throwable $e) {
    echo "Caindo no catch"
} 

fclose($arquivo);