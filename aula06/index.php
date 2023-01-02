<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Poo</title>
</head>
<body>
    <pre>
        <?php
        require_once 'pessoa.php';
        require_once 'livro.php';

        $p[0] = new Pessoa ("Pedro", 22, "M");
        $p[1] = new Pessoa ("Maria", 33, "F");

        $l[0] = new Livro ("Php básico", "José da Silva", 350 , $p[0]);
        $l[1] = new Livro ("Poo com PHP", "Glória Betania", 500, $p[0]);
        $l[2] = new Livro("Php avançado", "Augusto Roberto", 420, $p[1]);


       
        $l[0]->abrir();
        $l[0]->folhear(70);
       
        $l[0]->detalhes();
        

        
        ?>
    </pre>
</body>
</html>