<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula14 - POO</title>
</head>
<body>
    <h1>Exercicio</h1>
    <pre>
        <?php
            require_once "Video.php";
            require_once "Gafanhoto.php";

            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML5");
            print_r($v);

            $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
            $g[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");
            print_r($g);
        ?>
    </pre>
</body>
</html>