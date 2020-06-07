<?php
    require_once "Pessoa.php";
    class Aluno extends Pessoa{
        #Atributos
            private $matr;
            private $curso;
        #Métodos
            public function cancelarMatr(){
                echo "<p>Matricula será cancelada</p>";
            }
        #Métodos Especiais
            //Get
            public function getMatr(){
                return $this->matr;
            }
            public function getCurso(){
                return $this->curso;
            }
            //Set
            public function setMatr($matr){
                $this->matr = $matr;
            }
            public function setCurso($curso){
                $this->curso = $curso;
            }
    }
    
?>