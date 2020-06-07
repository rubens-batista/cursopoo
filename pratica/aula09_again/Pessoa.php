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
            //Construct
            public function __construct($nome, $idade, $sexo){
                $this->nome = $nome;
                $this->idade = $idade;
                $this->sexo = $sexo;
            }
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
            public function setNome(){
                $this->nome = $nome;
            }
            public function setIdade(){
                $this->idade = $idade;
            }
            public function setSexo(){
                $this->sexo = $sexo;
            }
    }
    
?>