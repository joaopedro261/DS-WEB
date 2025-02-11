<?php

//Crie as Classes e Objetos da Atividade 01 conforme o exemplo de código anexado a esta atividade.
class Jogador{
    //Atributos:
    public $Tamanho;
    public $peso;
    public $força;
    public $saúde;
    public $arrancada;

    //Método:
    public function correr(){

    }
    public function pular(){
        return "O jogador pulou";
    }
    public function caminhar(){

    }
}

    //Instanciando meus objetos

    $João = new Jogador(); //Inicio do objeto
    $João->arrancada = "Velocidade 35"; //Atribuindo valor a um atributo
    $João->peso = "75"; //Exibindo um atributo

    echo $João->pular();
    


?>