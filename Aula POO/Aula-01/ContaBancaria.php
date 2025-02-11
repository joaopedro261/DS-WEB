<?php

//Crie as Classes e Objetos da Atividade 01 conforme o exemplo de código anexado a esta atividade.
class ContaBancaria{
    //Atributos:
    public $NumerodaConta;
    public $NomedoTitular;
    public $Saldo;
    public $TipodeConta;
    public $Agencia;

    //Método:
    public function Depósitos(){
        return "Depositou 5.000,00";
    }
    private function Saques(){
        return "Sacou 100"
    }
    private function ConsultarSaldos(){
        return "Saldo de 100.000,00"
    }
}

    //Instanciando meus objetos

    $Japa = new ContaBancaria(); //Inicio do objeto
    $Japa->NumerodaConta = "123456"; //Atribuindo valor a um atributo
    $Japa->Saldo = "123.50,00"; //Exibindo um atributo
    $Japa->TipodeConta = "Débito";
    echo $Japa->Depósitos();

    $Giovana = new ContaBancaria(); //Inicio do objeto
    $Giovana->NumerodaConta = "987954"; //Atribuindo valor a um atributo
    $Giovana->Saldo = "76.99,00"; //Exibindo um atributo
    $Giovana->TipodeConta = "Crédito";
    echo $Giovana->Saques();


    $Sabrina = new ContaBancaria(); //Inicio do objeto
    $Sabrina->NumerodaConta = "987954"; //Atribuindo valor a um atributo
    $Sabrina->Saldo = "100.000,00"; //Exibindo um atributo
    $Sabrina->TipodeConta = "Poupança";
    echo $Sabrina->ConsultarSaldos();




?>