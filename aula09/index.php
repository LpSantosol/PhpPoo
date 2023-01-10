<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliformismo</title>
</head>
<body>
    <pre>
    <?php
        require_once 'classeave.php';
        require_once 'classemamiferos.php';
        require_once 'classepeixe.php';
        require_once 'classereptil.php';
      
        $a1 = new Ave();
        $a1->setPeso("18 Kilos");
        $a1->setIdade("6 anos");
        $a1->setMembros(2);
        $a1->setcorPena("Amarela");
        $a1->locomover();
        print_r($a1);

        $m1 = new Mamifero();
        $m1->setPeso("150 Kilos");
        $m1->setIdade("23 Anos");
        $m1->setMembros(4);
        $m1->setcorPelo("Marrom");
        print_r($m1);

        $p1 = new Peixe();
        $p1->setPeso("700 Gramas");
        $p1->setIdade("6 Meses");
        $p1->setMembros(4);
        $p1->setcorEscama("Azul e verde");
        print_r($p1);

        $r1 = new Reptil();
        $r1->setPeso("6 Kilos");
        $r1->setIdade("2 Anos");
        $r1->setMembros(4);
        $r1->setcorEscama("Verde e preto");
        print_r($r1);
    ?>
    </pre>
    
</body>
</html>