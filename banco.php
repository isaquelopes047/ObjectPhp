<?php

require_once './src/Conta.php';
require_once './src/Cliente.php';

$primeiraConta = new Conta(new Titular(
    nome: 'Isaque Lopes de Souza',
    cpf: '123.123.123-23',
    )
);

$segundaConta = new Conta(new Titular(
    nome: 'Bianca Maria Trapp Blaska',
    cpf: '321.321.321-32'
    )
);

echo Conta::recuperaNumeroDeContas();

/* $primeiraConta->defineCpfTitular(cpf:'123.123.123.12');
$primeiraConta->defineNomeTitular(nome:'Isaque Lopes de Souza');

$primeiraConta->depositar(valorADepositar: 500) . PHP_EOL;
$primeiraConta->defineNomeTitular(nome:'Isaque Lopes de Souza') . PHP_EOL;
$primeiraConta->sacar(200);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL; */