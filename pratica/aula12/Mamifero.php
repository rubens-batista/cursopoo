<?php
    require_once "Animal.php";
    class Mamifero extends Animal{
        #Atributos
            private $corPelo;
        #Sobrepor Métodos
            public function locomover(){
                echo "<p>Correndo</p>";
            }
            public function alimentar(){
                echo "<p>Mamando</p>";
            }
            public function emitirSom(){
                echo "<p>Som de Mamifero</p>";
            }
        #Métodos Especiais
            //Get
            public function getCorPelo(){
                return $this->corPelo;
            }
            //Set
            public function setCorPelo($corPelo){
                $this->corPelo = $corPelo;
            }
    }
    
?>