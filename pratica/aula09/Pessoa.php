<?php
    class Pessoa
    {
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
            public function SetNome(){
                $this->nome = $nome;
            }
            public function SetIdade(){
                $this->idade = $idade;
            }
            public function SetSexo(){
                $this->sexo = $sexo;
            }
    }
    
?>