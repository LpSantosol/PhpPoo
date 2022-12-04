<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta no Banco</title>
</head>
<body>
    <pre>
    <?php
    require_once "banco.php";

    $p1 = new contaBanco();
    $p2 = new contaBanco();

    $p1->abrirConta("cc");
    $p1->setDono("Jubileu");
    $p1->setnumConta("2458");
    $p1->depositar(300);
    $p1->pagarMensal();

    $p2->abrirConta("cp");
    $p2->setDono("Creuza");
    $p2->setnumConta("3485");
    $p2->depositar(500);
    $p2->sacar(100);
    $p2->pagarMensal();



    print_r($p1);
    print_r($p2);

    ?>
    </pre>
    
    
</body>
</html>