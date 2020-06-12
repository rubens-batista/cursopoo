<?php
    require_once "Pessoa.php";
    class Gafanhoto extends Pessoa{
        #Parametros
            private $login;
            private $totAssistido;
        #Métodos
            public function viuMaisUm(){
                $this->totAssistido ++;
            }
        #Métodos Sobreposição
            public function ganharExp(){

            }
        #Métodos Especiais
            //Construct
            public function __construct($nome, $sexo, $idade, $login){
                #Chamada do construct da superclasse "Pessoa"
                parent::__construct($nome, $idade, $sexo);
                $this->login = $login;
                $this->totAssistido = 0;
            }
            //Get
            public function getLogin(){
                return $this->titulo;
            }
            public function getTotAssistido(){
                return $this->totAssistido;
            }
            //Set
            public function setLogin($login){
                $this->titulo = $login;
            }
            public function setTotAssistido($totAssistido){
                $this->totAssistido = $totAssistido;
            }
    }
    
?>