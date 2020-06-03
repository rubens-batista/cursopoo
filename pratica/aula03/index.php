<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula03 - POO</title>
</head>
<body>
    <pre>
        <?php
            require_once "caneta.php"; #chamar classe
            $c1 = new caneta; #criando instancia
            $c1->modelo = "Bic Cristal";
            $c1->cor = "Azul";
            //$c1->ponta = 0.5;
            //$c1->carga = 99;
            //$c1->tampada = true;
            $c1->rabiscar();
            $c1->tampar();
            $c1->destampar();
            print_r($c1);
            
        ?>
    </pre>
</body>
</html>