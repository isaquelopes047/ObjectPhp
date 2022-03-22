<?php

class Conta
{
    //definir dados da classe, esses dados são atributos;
    //propriedades privadas, somente podem ser alteradas dentro dos metodos, boa pratica sempre ser priva e funcoes ser publicas;

    private $titular;
    private $saldo;
    private $valorDaTaxaDeSaque;
    private static $numeroDeContas = 0;
    //static usado para setar atributos direto a classe

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        $this->valorDaTaxaDeSaque = 5;

        self::$numeroDeContas++;
    }

    public static function recuperaNumeroDeContas():int
    {
        //a palavra self se referencia a classe, assim evitando de escrever o nome dela
        // assim como o this funciona para o objeto
        return self::$numeroDeContas;
    }

    public function sacar(float $valorSacar):void
    {

        if ($valorSacar > $this->saldo){
            echo "Saldo Indisponivel";
            return;
        } 

        $this -> saldo -= $valorSacar;
        $this -> saldo -= $this->valorDaTaxaDeSaque;
    }

    public function depositar(float $valorADepositar):void
    {
        if ($valorADepositar <= 0){
            echo "Você não pode depoistar valores iguais a zero";
            return;
        } 

        $this -> saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, $contaDeDestino): void
    {
        if($valorATransferir > $this->saldo){
            echo "Saldo indisponivel";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDeDestino->depositar($valorATransferir);
    }

    public function recuperarSaldo():float
    {
        return $this->saldo;
    }

    //getsTitular
    public function getCpf():string
    {
        return $this->titular->recuperaCpf();
    }

    //getsEndereco
    public function getCidade():string
    {
        return $this->titular->recuperaEnderecoCidade();
    }

    public function getBairro():string
    {
        return $this->titular->recuperaEnderecoBairro();
    }

    public function getRua():string
    {
        return $this->titular->recuperaEnderecoRua();
    }

    public function getNumeroResidencia():string
    {
        return $this->titular->recuperaEndecoNumeroResidencia();
    }
}