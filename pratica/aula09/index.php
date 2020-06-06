<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula09 - POO</title>
</head>
<body>
    <h1>Exercício POO em PHP</h1>
    <pre>
        <?php
            require_once "Pessoa.php";
            require_once "Livro.php";
            
            $p = array();

            $p[0] = new Pessoa("Pedro", 22, "M");
            $p[1] = new Pessoa("Maria", 31, "F");

            $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
            $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
            $l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);

            $l[0]->abrir();
            $l[0]->folhear(100);
            $l[0]->detalhes();

            $l[1]->detalhes();
            $l[2]->detalhes();
        ?>
    </pre>
</body>
</html>