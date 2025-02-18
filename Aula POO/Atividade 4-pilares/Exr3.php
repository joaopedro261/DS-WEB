<?php
    class Veiculo {
        public $marca;
        public $modelo;
        private $velocidade;

    public function getVelocidade(){
    }
    public function setVelocidade(){
    }
    }

class carro extends Veiculo{
    public function acelerar(){
        return "Velocidade Maxima 160km/h";
    }
}
class moto extends Veiculo{
    public function acelerar(){
        return "Velocidade Maxima 180km/h";
    }
}

$civic = new carro();
$civic->acelerar();
echo "Velocidade: " . $civic->acelerar() . "<br/>";

$hornet = new moto();
$hornet->acelerar();
echo "Velocidade: " . $hornet->acelerar() . "<br/>";
?>