<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula10 - POO</title>
</head>
<body>
    <h1>Herença</h1>
    <pre>
        <?php
            #require_once "Pessoa.php"; //Não é necessário
            require_once "Visitante.php";
            require_once "Professor.php";
            require_once "Aluno.php";
            require_once "Bolsista.php";
            require_once "Tecnico.php";

            #$p1 = new Pessoa(); // Não vai funcionar por é classe abstrata
            #Visitante
            $v1 = new Visitante();
            $v1->setNome("Juvenal");
            $v1->setIdade(33);
            $v1->setSexo("M");
            print_r($v1);
            #Professor
            $pr1 = new Professor();
            $pr1->setNome("Sicrano");
            $pr1->setIdade(34);
            $pr1->setSexo("M");
            $pr1->setEspecialidade("Programação");
            $pr1->setSalario(2340.40);
            $pr1->receberAumento(400);
            print_r($pr1);
            #Aluno
            $a1 = new Aluno();
            $a1->setNome("Pedro");
            $a1->setMatricula(1111);
            $a1->setIdade(16);
            $a1->setSexo("M");
            $a1->setCurso("Informática");
            $a1->pagarMensalidade();
            print_r($a1);
            #Bolsista
            $b1 = new Bolsista();
            $b1->setMatricula(111222);
            $b1->setNome("Jubileu");
            $b1->setBolsa("12.5");
            $b1->setCurso("Administração");
            $b1->setIdade(17);
            $b1->pagarMensalidade();
            print_r($b1);
            #Técnico
            $t1 = new Tecnico();
            $t1->setRegistroProfissional(223344);
            $t1->setNome("Beltrana");
            $t1->setIdade(23);
            $t1->setSexo("F");
            $t1->setMatricula(445522);
            $t1->setCurso("Web Designer");
            $t1->pagarMensalidade();
            $t1->praticar();
            print_r($t1);
        ?>
    </pre>
</body>
</html>