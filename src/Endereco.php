<?php

class Endereco
{
    private string $Cidade;
    private string $Bairro;
    private string $Rua;
    private string $numero;

    public function __construct(string $Cidade, string $Bairro, string $Rua, string $numero)
    {
        $this->Cidade = $Cidade;
        $this->Bairro = $Bairro;
        $this->Rua = $Rua;
        $this->numero = $numero;
    }

    public function recuperaCidade():string
    {
        return $this->Cidade;
    }

    public function recuperaBairro():string
    {
        return $this->Bairro;
    }

    public function recuperaRua():string
    {
        return $this->Rua;
    }

    public function recuperaNumeroResidencia():string
    {
        return $this->numero;
    }
}
