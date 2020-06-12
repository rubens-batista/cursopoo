<?php
    abstract class Animal{
        #Atributos
            protected $peso;
            protected $idade;
            protected $membros;
        #Métodos
            abstract public function emitirSom();
        #Métodos Especiais
            //Get
            public function getPeso(){
                return $this->peso;
            }
            public function getIdade(){
                return $this->idade;
            }
            public function getMembros(){
                return $this->membros;
            }
            //Set
            public function setPeso($peso){
                $this->peso = $peso;
            }
            public function setIdade($idade){
                $this->idade = $idade;
            }
            public function setMembros($membros){
                $this->membros = $membros;
            }
    }
    
?>