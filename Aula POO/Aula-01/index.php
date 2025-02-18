<?php


class Veiculo {
    //Atributos:
    public $marca;

    protected $seguro;

    public $renavam;

    //Metodo:
    public function ligar(){

    }
}

//Instanciando meus objetos

$polo = new Veiculo(); //Inicio do objeto
$polo->marca = "Wolkswagem"; //Atribuindo valor a um atributo
$polo->renavam = "0506"; //Exibindo um atributo

?>