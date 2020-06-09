<?php
    require_once "Animal.php";
    class Peixe extends Animal{
        #Atributos
            private $corEscama;
        #Métodos
            public function soltarBolha(){
                echo "<p>Soltou uma bolha</p>";
            }
        #Sobrepor Métodos
            public function locomover(){
                echo "<p>Nadando</p>";
            }
            public function alimentar(){
                echo "<p>Comendo substâncias</p>";
            }
            public function emitirSom(){
                echo "<p>Peixe não faz som</p>";
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