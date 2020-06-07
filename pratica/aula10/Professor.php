<?php
    require_once "Pessoa.php";
    class Professor extends Pessoa{
        #Atributos
            private $especialidade;
            private $salario;
        #Métodos
            public function receberAum($aum){
                $this->salario += $aum;
            }
        #Métodos Especiais
            //Get
            public function getEspecialidade(){
                return $this->especilidade;
            }
            public function getSalario(){
                return $this->salario;
            }
            //Set
            public function setEspecialidade($especialidade){
                $this->especialidade = $especialidade;
            }
            public function setSalario($salario){
                $this->salario = $salario;
            }
    }
    
?>