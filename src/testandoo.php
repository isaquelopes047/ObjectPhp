<?php

class DadosBase
{
    private string $name;
    private int $year;

    public function __construct(string $name, string $year)
    {  
       $this->name = $name;
       $this->year = $year; 
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getYear():int
    {
        return $this->year;
    }
}

class DadosCadastrais extends DadosBase
{
    private string $CPF;

    public function __construct(string $CPF, $name, $year)
    {
        parent::__construct($name, $year);
        $this->CPF = $CPF;
    }

    public function getCPF():string
    {
        return $this->CPF;
    }
}

$primeiraPessoa = new DadosCadastrais(name: 'Isaque', year: 23, CPF: '123.123.123-12');
echo $primeiraPessoa->getName();
