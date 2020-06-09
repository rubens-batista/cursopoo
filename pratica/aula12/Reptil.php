<?php
    require_once "Animal.php";
    class Reptil extends Animal{
        #Atributos
            private $corEscama;
        #Sobrepor Métodos
            public function locomover(){
                echo "<p>Rastejando</p>";
            }
            public function alimentar(){
                echo "<p>Comendo vegetais</p>";
            }
            public function emitirSom(){
                echo "<p>Som de Réptil</p>";
            }
        #Métodos Especiais
            //Get
            public function getCorEscama(){
                return $this->corEscama;
            }
            //Set
            public function setCorEscama($corEscama){
                $this->corEscama = $corEscama;
            }
    }
    
?>