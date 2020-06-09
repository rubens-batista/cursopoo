
<?php
    require_once "Mamifero.php";
    class Canguru extends Mamifero{
        #Métodos
            public function usarBolsa(){
                echo "<p>Usou Bolsa</p>";
            }
        #Sobrepor Métodos
            public function locomover(){
                echo "<p>Saltando</p>";
            }
            public function emitirSom(){
                echo "<p>Som de Canguru</p>";
            }
    }
    
?>