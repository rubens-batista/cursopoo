<?php
    require_once "Aluno.php";

    class Tecnico extends Aluno{
        #Atributos
            private $registroProfissional;
        #Métodos
            public function praticar()
            {
                echo "<p>O Técnico <strong>$this->nome</strong> está praticando!</p>";
            }
        #Métodos Especiais
            //Get
            public function getRegistroProfissional(){
                return $this->registroProfissional;
            }
            //Set
            public function setRegistroProfissional($registroProfissional){
                $this->registroProfissional = $registroProfissional;
            }
    }
    
?>