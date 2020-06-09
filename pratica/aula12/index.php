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
            require_once "Reptil.php";
            require_once "Peixe.php";
            require_once "Ave.php";
            require_once "Canguru.php";
            require_once "Cachorro.php";
            require_once "Tartaruga.php";
            #Mamifero
                $m1 = new Mamifero();
                $m1->setPeso(85.3);
                $m1->setIdade(2);
                $m1->setMembros(4);
                $m1->locomover();
                $m1->alimentar();
                $m1->emitirSom();
                print_r($m1);
            #Reptil
                $r1 = new Reptil();
                $r1->setPeso(2.3);
                $r1->setIdade(3);
                $r1->setMembros(0);
                $r1->locomover();
                $r1->alimentar();
                $r1->emitirSom();
                print_r($r1);
            #Peixe
                $p1 = new Peixe();
                $p1->setPeso(0.35);
                $p1->setIdade(1);
                $p1->setMembros(0);
                $p1->locomover();
                $p1->alimentar();
                $p1->emitirSom();
                $p1->soltarBolha();
                print_r($p1);
            #Ave
                $a1 = new Ave();
                $a1->setPeso(0.89);
                $a1->setIdade(2);
                $a1->setMembros(2);
                $a1->locomover();
                $a1->alimentar();
                $a1->emitirSom();
                $a1->fazerNinho();
                print_r($a1);
            
            //SubClasses
                #Canguro
                $c1 = new Canguru();
                $c1->setPeso(55.30);
                $c1->setIdade(3);
                $c1->setMembros(4);
                $c1->locomover();
                $c1->alimentar();
                $c1->emitirSom();
                $c1->usarBolsa();
                print_r($c1);
                #Cachorro
                $k1 = new Cachorro();
                $k1->setPeso(3.94);
                $k1->setIdade(5);
                $k1->setMembros(4);
                $k1->locomover();
                $k1->alimentar();
                $k1->emitirSom();
                $k1->enterrarOsso();
                $k1->abanarRabo();
                print_r($k1);
                $t1 = new Tartaruga();
                $t1->setPeso(1.3);
                $t1->setIdade(30);
                $t1->setMembros(4);
                $t1->locomover();
                $t1->alimentar();
                $t1->emitirSom();
                print_r($t1);
                
        ?>
    </pre>
</body>
</html>