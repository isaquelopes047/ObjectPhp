<?php

class Titular
{
    private DadosEndereco $Endereco;
    private Dependentes $dependentes;
    private CPF $cpf;
    private string $nome;

    public function __construct(CPF $cpf, DadosEndereco $Endereco, Dependentes $dependentes, string $nome)
    {
        $this->Endereco = $Endereco;
        $this->dependentes = $dependentes;
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validaNomeTitular($nome);
    }

    public function recuperaCpf():string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome():string
    {
        return $this->nome;
    }

    public function recuperaEndereco():string
    {  
        return $this->Endereco->recuperaCidade();
    }

    public function recuperaNumeroDependentes():int
    {
        return $this->dependentes->recuperaDependestes();
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