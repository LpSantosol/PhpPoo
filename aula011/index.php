<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php POO</title>
</head>
<body>
    <pre>
        <?php
            require_once 'classevideo.php';
            require_once 'classegafanhoto.php';

            $v1[0] = new Video("Aula 1 de POO");
            $v1[1] = new Video("Aula 12 de PHP");
            $v1[2] = new Video("Aula 15 de HTML5");

            print_r($v1);

            $g[0] = new Gafanhoto("Jubileu", 22, "M", "Juba");
            $g[1] = new Gafanhoto("Creuza", 25, "F", "Creuzita");

            print_r($g);
        ?>
    </pre>
    
</body>
</html>