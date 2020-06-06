<?php
    class Lutador{
        #Atributos
            private $nome;
            private $nacionalidade;
            private $idade, $altura, $peso;
            private $categoria, $vitorias, $derrotas, $empates;
        #Métodos
            public function apresentar(){
                echo "<p>-----------------------------</p>";
                echo "<p>CHEGOU A HORA! O lutador, {$this->getNome()}</p>";
                echo "<p>Veio diretamente de, {$this->getNacionalidade()}</p>";
                echo "<p>tem {$this->getIdade()} anos, pesando {$this->getPeso()}Kg, com {$this->getAltura()}m de altura</p>";
                echo "<p>Ele tem {$this->getVitorias()} vitorias, {$this->getDerrotas()} derrotas e {$this->getEmpates()} empates</p>";
            }
            public function status(){
                echo "<p>-----------------------------</p>";
                echo "<p>{$this->getNome()} é um peso {$this->getCategoria()}</p>";
                echo "<p>e ja ganhou {$this->getVitorias()} vezes, perdeu {$this->getDerrotas()} vezes e empatou {$this->getEmpates()} vezes</p>";
            }
            public function ganharLuta(){
                $this->setVitorias($this->getVitorias() + 1);
            }
            public function perderLuta(){
                $this->setDerrotas($this->getDerrotas() + 1);
            }
            public function empatarLuta(){
                $this->setEmpates($this->getEmpates() + 1);
            }
        #Métodos Especiais
            //Construct
            public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
                $this->nome = $no;
                $this->nacionalidade = $na;
                $this->idade = $id;
                $this->altura = $al;
                $this->setPeso($pe);
                $this->vitorias = $vi;
                $this->derrotas = $de;
                $this->empates = $em;
            }
            //Gets
            public function getNome(){
                return $this->nome;
            }
            public function getNacionalidade(){
                return $this->nacionalidade;
            }
            public function getIdade(){
                return $this->idade;
            }
            public function getAltura(){
                return $this->altura;
            }
            public function getPeso(){
                return $this->peso;
            }
            public function getCategoria(){
                return $this->categoria;
            }
            public function getVitorias(){
                return $this->vitorias;
            }
            public function getDerrotas(){
                return $this->derrotas;
            }
            public function getEmpates(){
                return $this->empates;
            }
            //Sets
            public function setNome($no){
                $this->nome = $no;
            }
            public function setNacionalidade($na){
                $this->nacionalidade = $na;
            }
            public function setIdade($id){
                $this->idade = $id;
            }
            public function setAltura($al){
                $this->altura = $al;
            }
            public function setPeso($pe){
                $this->peso = $pe;
                $this->setCategoria();
            }
            private function setCategoria(){
                if($this->getPeso() < 52.2){
                    $this->categoria = "Invalido";
                }elseif ($this->getPeso() <= 70.3) {
                    $this->categoria = "Leve";
                }elseif ($this->getPeso() <= 83.9) {
                    $this->categoria = "Médio";
                }elseif ($this->getPeso() <=120.2) {
                    $this->categoria = "Pesado";
                }else {
                    $this->categoria = "Invalido";
                }
            }
            public function setVitorias($vi){
                $this->vitorias = $vi;
            }
            public function setDerrotas($de){
                $this->derrotas = $de;
            }
            public function setEmpates($em){
                $this->empates = $em;
            }
    }

?>