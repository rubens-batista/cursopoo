<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula12 - POO</title>
</head>
<body>
    <h1>Polimorfismo</h1>
    <pre>
        <?php
            require_once "Mamifero.php";
            require_once "Lobo.php";
            require_once "Cachorro.php";
            #Cachorro
                $c1 = new Cachorro();
                $c1->emitirSom();
                $c1->reagirFrase("Olá");
                $c1->reagirFrase("Vai apanha!");
                $c1->reagirHora(11, 45);
                $c1->reagirHora(21, 00);
                $c1->reagirDono(true);
                $c1->reagirDono(false);
                $c1->reagirIdade(2, 12.5);
                $c1->reagirIdade(17, 4.5);
            
                
        ?>
    </pre>
</body>
</html>