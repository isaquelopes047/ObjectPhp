<?php

class Pessoa
{
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf; 
        $this->validaNomeTitular($nome);
    }

    /* public function recuperaNome():string
    {
        return $this->nome;
    } */

    public function recuperaCpf():string
    {
        return $this->cpf->recuperaNumero();
    }

    protected function validaNomeTitular($nome) 
    // tornando o metodo privado para evitar o acesso dele fora
    {
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menor 5 caracteres";
            exit();
        }
    }
}