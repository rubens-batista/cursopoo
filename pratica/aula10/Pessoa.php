<?php
    class Pessoa{
        #Atributos
            private $nome;
            private $idade;
            private $sexo;
        #Métodos Públicos
            public function fazerAniver(){
                $this->idade ++;
            }
        #Métodos Especiais
            //Gets
            public function getNome(){
                return $this->nome;
            }
            public function getIdade(){
                return $this->idade;
            }
            public function getSexo(){
                return $this->sexo;
            }
            //Sets
            public function SetNome($nome){
                $this->nome = $nome;
            }
            public function SetIdade($idade){
                $this->idade = $idade;
            }
            public function SetSexo($sexo){
                $this->sexo = $sexo;
            }
    }
    
?>