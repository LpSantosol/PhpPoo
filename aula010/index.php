<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo de Sobrecarga</title>
</head>
<body>
    <?php
    require_once 'classemamifero.php';
    require_once 'classelobo.php';
    require_once 'classecachorro.php';

    $c = new Cachorro();
    $c->reagirIdadePeso(2, 12.5);
    $c->reagirIdadePeso(17, 4.5);

    
    ?>
    
</body>
</html>