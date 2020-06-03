<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula05 - POO</title>
</head>
<body>
    <pre>
        <?php
            #Linkando Classe
            require_once "ContaBanco.php";

            #Criando Conta
            $p1 = new ContaBanco(); #Jubileu
            $p2 = new ContaBanco(); #Creusa
            #Definindo Tipo de conta
            $p1->abrirConta("CC");
            $p2->abrirConta("CP");
            #Adicionando Dono
            $p1->setDono("Jubileu");
            $p2->setDono("Creusa");
            #Definido numero de conta
            $p1->setNumConta(1111);
            $p2->setNumConta(2222);
            #Depositando
            $p1->depositar(300);
            $p2->depositar(500);
            #Cobrando taxa
            $p1->pagarMensal();
            $p2->pagarMensal();
            #Sacar
            $p1->sacar(338);
            $p2->sacar(630);
            #Fechando conta
            $p1->fecharConta();
            $p2->fecharConta();
            
            #Exibindo na tela
            print_r($p1);
            print_r($p2);
        ?>
    </pre>
</body>
</html>