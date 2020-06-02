<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula02 - POO</title>
</head>
<body>
    <pre> <!--Formatação mais bonita-->
        <?php
            require_once "Caneta.php"; #chamar classe
            #Criando Instancia
            $c1 = new Caneta;
            #Adicionando Valores
            $c1->setModelo("Bic");
            $c1->setPonta(0.5); // Só posso mexer no privado, por que estou usando set.

            print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";

            print "<br><br>";
            
            #Construct com paramentros
            $l1 = new Lapis("HB", "Preto", 0.5);
            $l2 = new Lapis("HB", "Azul", 1.0);

            print_r($l1);
            print("<br>");
            print_r($l2);
            
        ?>
    </pre>
</body>
</html>