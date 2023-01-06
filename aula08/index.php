<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php classes e pseudoclasses</title>
</head>
<body>
    <pre>
        <?php
        /*require_once 'classevisitante.php';*/
        require_once 'classealuno.php';
        require_once 'classebolsista.php';

       /* $v1 = new Visitante();
        
        $v1->setNome("Juvenal");
        $v1->setIdade(33);
        $v1->setSexo("M");*/

        $a1 = new Aluno();

        $a1->setNome("Bores");
        $a1->setIdade(18);
        $a1->setSexo("M");
        $a1->setMatricula(425);
        $a1->setCurso("Informatica");
        $a1->pagarMensalidade();

        print_r($a1);

        $b1 = new Bolsista;

        $b1->setNome("Glória");
        $b1->setIdade("16");
        $b1->setSexo("F");
        $b1->setMatricula(536);
        $b1->setCurso("DEV");
        $b1->setBolsa("70 %");
        $b1->pagarMensalidade();

        print_r($b1);
        
        ?>
    </pre>
</body>
</html>