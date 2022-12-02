<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php POO</title>
   
</head>
<body>
    <?php
        require_once 'func.php';

       
            $c1 = New caneta;
            $c1->cor = "preta";
            $c1->modelo = "colorida";
            $c1->ponta = 0.5;
            $c1->tampar();
            $c1->rabiscar();
            print_r($c1);
        

        echo "<br/>";
        $c2 = New caneta;
        $c2-> cor = "Vermelha";
        $c2-> carga = "50%";
        $c2-> modelo = "Hidrográfica";
        $c2-> destampar();
        $c2-> rabiscar();
        
        print_r($c2);

    




        




    ?>
    
</body>
</html>