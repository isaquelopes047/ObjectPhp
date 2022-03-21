<?php

class DadosEndereco{

    private string $Cidade;
    private string $Bairro;
    private string $Rua;
    private int $numeroResidencia;

    public function __construct(string $Cidade, string $Bairro, string $Rua, int $numeroResidencia)
    {
        $this->Cidade = $Cidade;
        $this->Bairro = $Bairro;
        $this->Rua = $Rua;
        $this->numeroResidencia = $numeroResidencia;
    }

    public function recuperaCidade()
    {
        return $this->Cidade;
    }

    public function recuperaBairro()
    {
        return $this->Bairro;
    }

    public function recuperaRua()
    {
        return $this->Rua;
    }

    public function recuperaNumeroResidencia()
    {
        return $this->numeroResidencia;
    }
}
