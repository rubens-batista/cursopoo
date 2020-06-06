<?php
    require_once "Pessoa.php";
    require_once "Publicacao.php";
    class Livro implements Publicacao{
        #Atributos
            private $titulo, $autor, $leitor;
            private $totPaginas, $pagAtual;
            private $aberto;
        #Métodos Públicos
            public function detalhes()
            {
                echo "<hr><p>Livro {$this->titulo} escrito por {$this->autor}</p>";
                echo "<p>Páginas: {$this->totPaginas} atual {$this->pagAtual}</p>";
                echo "<p>Sendo lido por {$this->leitor->getNome()}</p>";
            }
        #Métodos Especiais
            //Construct
            public function __construct($titulo, $autor, $totPaginas, $leitor)
            {
                $this->titulo = $titulo;
                $this->autor = $autor;
                $this->totPaginas = $totPaginas;
                $this->aberto = false;
                $this->pagAtual = 0;
                $this->leitor = $leitor;
            }
            //Gets
            public function getTitulo(){
                return $this->titulo;
            }
            public function getAutor(){
                return $this->autor;
            }
            public function getLeitor(){
                return $this->leitor;
            }
            public function getTotPaginas(){
                return $this->totPaginas;
            }
            public function getPagAtual(){
                return $this->pagAtual;
            }
            public function getAberto(){
                return $this->aberto;
            }
            //Sets
            public function setTitulo(){
                $this->titulo = $titulo;
            }
            public function setAutor(){
                $this->autor = $autor;
            }
            public function setLeitor(){
                $this->leitor = $leitor;
            }
            public function setTotPaginas(){
                $this->totPaginas = $totPaginas;
            }
            public function setPagAtual(){
                $this->pagAtual = $pagAtual;
            }
            public function setAberto(){
                $this->aberto = $aberto;
            }
        #Métodos Abstratos
            public function abrir(){
                $this->aberto = true;
            }
            public function fechar(){
                $this->aberto = false;
            }
            public function folhear($p){
                if ($p > $this->totPaginas) {
                    $this->pagAtual = 0;
                }else {
                    $this->pagAtual = $p;
                }
            }
            public function avancarPag(){
                $this->pagAtual ++;
            }
            public function voltarPag(){
                $this->pagAtual --;
            }
    }
    
?>