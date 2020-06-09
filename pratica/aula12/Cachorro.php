
<?php
    require_once "Mamifero.php";
    class Cachorro extends Mamifero{
        #Métodos
            public function enterrarOsso(){
                echo "<p>Enterrando osso</p>";
            }
            public function abanarRabo(){
                echo "<p>Abanando o rabo</p>";
            }
        #Sobrepor Métodos
            public function emitirSom(){
                echo "<p>Auau</p>";
            }
    }
    
?>