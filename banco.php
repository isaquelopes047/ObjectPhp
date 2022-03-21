<?php

require_once './src/Conta.php';
require_once './src/Cliente.php';
require_once './src/CPF.php';
require_once './src/Endereco.php';
require_once './src/Dependentes.php';

$Isaque = new Titular(
    new CPF
        (
        numero: '123.123.123-03'
    ), 
    new DadosEndereco(
        Cidade: 'Barra Velha',
        Bairro: 'Loa Angeles',
        Rua: 'Lucio Brugnago',
        numeroResidencia: 211,
    ),
    new Dependentes(
        dependentes: 3,
    ),
    nome: 'Isaque'
);

$primeiraConta = new Conta($Isaque);

echo $primeiraConta->getCidade() . PHP_EOL;
echo $primeiraConta->getDependentes() . PHP_EOL;
echo $primeiraConta->getCpf();