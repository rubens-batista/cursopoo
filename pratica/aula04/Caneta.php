<?php
    class Caneta{
        private $modelo;
        private $cor;
        private $ponta;
        private $tampada;
        
        public function Caneta(){ # Pode usar __construct() ou colocar o mesmo nome da classe "Caneta"
            $this->cor = "Azul";
            $this->tampar();
        }

        public function tampar(){
            $this->tampada = true;
        }

        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($m){
            $this->modelo = $m;
        }
        public function getPonta(){
            return $this->ponta;
        }
        public function setPonta($p){
            $this->ponta = $p;
        }
    }   
    class Lapis{
        private $modelo;
        private $cor;
        private $ponta;
        private $apontado;

        public function Lapis($m, $c, $p){
            $this->modelo = $m;
            $this->cor = $c;
            $this->ponta = $p;
            $this->apontar();
        }

        public function apontar(){
            $this->apontado = true;
        }
    }
?>