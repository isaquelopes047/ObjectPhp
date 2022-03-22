<?php

require_once './src/Pessoa.php';
require_once './src/Funcionarios.php';
require_once './src/CPF.php';

$umFuncionario = new Funcionarios('Isaque', new CPF('123.123.123-12'), 'Desenvolvedor');
var_dump($umFuncionario);



/* $clienteUm = new Titular(
    new CPF(
        numero: '123.123.123-03'
    ), 
    new Endereco(
        Cidade: 'Barra Velha',
        Bairro: 'Loa Angeles',
        Rua: 'Lucio Brugnago',
        numero: '211',
    ),
    nome: 'Isaque'
);*/