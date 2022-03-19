<?php

class Conta
{
    //definir dados da classe, esses dados são atributos;
    //propriedades privadas, somente podem ser alteradas dentro dos metodos, boa pratica sempre ser priva e funçoes ser publicas;

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

    public function __destruct()
    {
        self::$numeroDeContas--;
        echo "Conta retirada";
    }

    public static function recuperaNumeroDeContas():int
    {
        //a palavra self se referencia a classe, assim evitando de escrever o nome dela
        // assim como o this funciona para o objeto
        return self::$numeroDeContas;
    }

    public function sacar(float $valorSacar):void
    {

        if ($valorSacar > $this -> saldo){
            echo "Saldo Indisponivel";
            return;
        } 

        $this -> saldo -= $valorSacar;
        $this -> saldo -= $this->valorDaTaxaDeSaque;

        /* $this->mostrarMensagemSaque($valorSacar); */
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

    function mostrarMensagemSaque($valorSacar)
    {
        echo "Você realizou um saque no valor de R$ {$valorSacar}, a taxa cobrada pelo serviço foi de R$ {$this->valorDaTaxaDeSaque}, seu saldo atual é de R$ {$this->saldo}";
    }

    //como acessar os atributos que agora são privados?
    //criando um metodo que retorna o saldo

    public function recuperarSaldo():float
    {
        return $this->saldo;
    }
}