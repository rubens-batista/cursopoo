
<?php
    require_once "Reptil.php";
    class Tartaruga extends Reptil{
        #Sobrepor Métodos
            public function locomover(){
                echo "<p>Andando beeeem devagar</p>";
            }
            public function alimentar(){
                echo "<p>Comendo vegetais</p>";
            }
            public function emitirSom(){
                echo "<p>Som de Réptil</p>";
            }
    }
    
?>