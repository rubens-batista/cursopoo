<?php
    abstract class Pessoa{
        #Atributos
            protected $nome;
            protected $idade;
            protected $sexo;
        #Métodos
            public function fazerAniv(){
                $this->idade ++;
            }
        #Métodos Especiais
            //Get
            public function getNome(){
                return $this->nome;
            }
            public function getIdade(){
                return $this->idade;
            }
            public function getSexo(){
                return $this->sexo;
            }
            //Set
            public function setNome($nome){
                $this->nome = $nome;
            }
            public function setIdade($idade){
                $this->idade = $idade;
            }
            public function setSexo($sexo){
                $this->sexo = $sexo;
            }
    }
    
?>