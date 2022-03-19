<?php

class Titular
{
    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validaNomeTitular($nome);
    }

    public function recuperaCpf():string
    {
        return $this->cpf;
    }
    public function recuperaNome():string
    {
        return $this->nome;
    }
    private function validaNomeTitular($nome) 
    // tornando o metodo privado para evitar o acesso dele fora
    {
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menor 5 caracteres";
            exit();
        }
    }
}