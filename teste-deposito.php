<?php

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
    (new CPF(numero: '100.333.444-10')),
    nome: 'Rebecca M',
    new Endereco(cidade: 'Cidade', bairro: 'bairro', rua: 'rua', numero: 'numero')

    )
);
try{
    $contaCorrente->deposita($valorADepositar-100);
} catch (InvalidArgumentException $exception) {
    echo "Valor a depositar precisa ser positivo";
}
