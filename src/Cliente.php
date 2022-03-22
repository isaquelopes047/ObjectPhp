<?php

class Titular extends Pessoa
{
    private Endereco $Endereco;

    public function __construct(CPF $cpf, Endereco $Endereco, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validaNomeTitular($nome);
        $this->Endereco = $Endereco;
    }

    //getsEndereco
    public function recuperaEnderecoCidade():string
    {  
        return $this->Endereco->recuperaCidade();
    }

    public function recuperaEnderecoBairro():string
    {
        return $this->Endereco->recuperaBairro();
    }

    public function recuperaEnderecoRua():string
    {
        return $this->Endereco->recuperaRua();
    }

    public function recuperaEndecoNumeroResidencia():string
    {
        return $this->Endereco->recuperaNumeroResidencia();
    }
}