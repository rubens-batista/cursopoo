<?php
    require_once "Controlador.php";
    class ControleRemoto implements Controlador{
        #Atributos
        private $volume;
        private $ligado;
        private $tocando;

        #Métodos Especiais
        public function __construct(){
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }
        //Gets
        private function getVolume(){
            return $this->volume;
        }
        private function getLigado(){
            return $this->ligado;
        }
        private function getTocando(){
            return $this->tocando;
        }
        //Sets
        private function setVolume($volume){
            $this->volume = $volume;
        }
        private function setLigado($ligado){
            $this->ligado = $ligado;
        }
        private function setTocando($tocando){
            $this->tocando = $tocando;
        }
        #Métodos abstratos
        public function ligar(){
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }
        public function abrirMenu(){
            echo "<p>Está ligado?: ".($this->getLigado()?'SIM':'NÃO')."</p>";
            echo "<p>Está tocando?:".($this->getTocando()?'SIM':'NÃO')."</p>";
            echo "<p>Volume: {$this->getVolume()}</p>";
            for($i=0; $i <= $this->getVolume(); $i+=10){
                echo "|";
            }
            echo "<br>";
        }
        public function fecharMenu(){
            echo "Fechando Menu...";
        }
        public function maisVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() + 10);
            }else{
                echo "<p>Error! Não posso aumentar o volume</p>";
            }
        }
        public function menosVolume(){
            if($this->getLigado()){
                $this->setVolume($this->getVolume() - 10);
            }else{
                echo "<p>Error! Não posso diminuir o volume</p>";
            }
        }
        public function ligarMudo(){
            if($this->getLigado() && $this->getVolume() > 0){
                $this->getVolume(0);
            }
        }
        public function desligarMudo(){
            if($this->getLigado() && $this->getVolume() == 0){
                $this->getVolume(50);
            }
        }
        public function play(){
            if($this->getLigado() && !$this->getTocando()){
                $this->setTocando(true);
            }
        }
        public function pause(){
            if($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }
        }

    }
?>