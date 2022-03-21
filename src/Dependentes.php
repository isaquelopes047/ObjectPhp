<?php

class Dependentes{

    private int $dependentes;

    public function __construct(int $dependentes)
    {
        
        $this->dependentes = $dependentes;
    }

    public function recuperaDependestes()
    {
        return $this->dependentes;
    }
}