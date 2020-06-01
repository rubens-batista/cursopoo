<?php
    class controle_remoto{
        var $modelo;
        var $cor;
        var $peso;
        var $comprimento;
        var $largura;
        var $pilha;

        function tem_pilha(){
            if ($this->pilha == true) {
                echo "Controle Funciona";
            }else {
                echo "ERROR! Controle sem pilha";
            }
        }
        function tem_bateria(){
            $this->pilha = true;
        }
        function sem_bateria(){
            $this->pilha = false;
        }
    }
?>