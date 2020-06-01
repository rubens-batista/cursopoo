<?php
    /*classe estudar
        dia: "todo dia" #caractere
        local: "casa" #caractere
        hora: 03:00 #real
        curso: "web developer" #caractere
        cansado: false #logico

        metodo saude()
            se (cansado) entao
                escreva "estudar danado"
            senao
                escreva "descansar"
            fimse
        fimmetodo saude
    fimclasse estudar*/

    class estudar{
        var $dias;
        var $local;
        var $tempo_estudo;
        var $curso;
        var $cansado;

        function cansou(){
            $this->cansado = true;
        }
        function naocansou(){
            $this->cansado = false;
        }
    }
?>