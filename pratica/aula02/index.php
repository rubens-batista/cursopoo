<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula02 - POO</title>
</head>
<body>
    <?php
        require_once "caneta.php"; #chamar classe
        $c1 = new caneta; #criando instancia
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampar();#false = vazio, true = 1

        print_r($c1);
        echo "<br>";

        $c2 = new caneta;
        $c2->cor = "Verde";
        $c2->carga = 50;
        $c2->tampar();

        print_r($c2);
        echo "<br>----------------------------------------------<br>";

        require_once "controle_remoto.php";
        $cr = new controle_remoto;
        $cr->modelo = "Silver";
        $cr->cor = "Preto";
        $cr->peso = 0.100;
        $cr->comprimento = 0.16;
        $cr->largura = 8;
        $cr->tem_bateria();
        $cr->tem_pilha();

        echo "<br>";
        print_r($cr);
        echo "<br>----------------------------------------------<br>";

        require_once "estudar.php";
        $study = new estudar;
        $study->dias = "Todos";
        $study->local = "Curso em Video";
        $study->tempo_estudo = 3;
        $study->curso = "Web Development";
        $study->naocansou();

        print_r($study);

        /*var $dias;
        var $local;
        var $tempo_estudo;
        var $curso;
        var $cansado;*/
    ?>
</body>
</html>