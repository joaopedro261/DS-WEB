<?php
    abstract class Animal {
        public function fazerSom(){}
        }
        class Cachorro extends Animal {
            public function fazersom(){
                return "Au Au";
            }
        }
        
        class Gato extends Animal{
            public function fazersom(){
                return "Miau";
            }
        }
        class passaro extends Animal{
            public function mover(){
                return "Voa e Anda"; 
            }
        }

//Instanciando objeto
$cachorro = new Cachorro();
$cachorro->fazerSom();
echo "Som do cachorro: " . $cachorro->fazerSom() . "<br/>";

$gato = new Gato();
$gato->fazerSom();
echo "Som do gato: " . $gato->fazerSom() . "<br/>";

$passaro = new passaro();
$passaro->mover();
echo "Som do passaro: " . $passaro->mover() . "<br/>";
?>