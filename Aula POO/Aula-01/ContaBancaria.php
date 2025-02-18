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
    public function Sacar($saque){
        $this->saldo-= $saque;
        return "este é o nome saldo".$this->saldo;
    }
    public function ConsultarSaldo($deposito){
        $this->saldo += $deposito;
        return "Este é o novo saldo".$this->saldo;
    }
}

    //Instanciando meus objetos

    $Japa = new ContaBancaria(); //Inicio do objeto
    $Japa->NumerodaConta = "123456"; //Atribuindo valor a um atributo
    $Japa->Saldo = "123.50,00"; //Exibindo um atributo
    $Japa->TipodeConta = "Débito";
    echo $Japa->Depósitos();
    echo"<br>";
    echo $Japa->sacar();
    echo "<br>";
    echo $Japa->ConsultarSaldo(100);

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