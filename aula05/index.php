<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacionamento de classes</title>
</head>
<body>
    <pre>
    <?php
    require_once "lutador.php";
    require_once "luta.php";
    $l = array();
    $l[0] = new Lutador("Pretty boy", "França", 30, 1.75, 68.9, 11, 2, 1);
    $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
    $l[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
    $l[3] = new Lutador("UFOColbol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
    $l[4] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);


    $UEC01 = new Luta();
    $UEC01->marcarLuta($l[0], $l[1]);
    $UEC01->lutar();
    $l[0]->status();
    $l[1]->status();


    ?>
    </pre>
</body>
</html>