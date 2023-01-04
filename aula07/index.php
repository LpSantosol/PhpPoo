<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            require_once 'classealuno.php';
            require_once 'classefuncionario.php';
            require_once 'classepessoa.php';
            require_once 'classeprofessor.php';

            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();

            $p1->setNome("Pedro");
            $p1->setidade(42);
            $p1->setSexo("Masculino");
            

            $p2->setNome("Maria");
            $p2->setIdade(14);
            $p2->setCurso("Informatica");
            $p2->setSexo("Feminino");
            $p2->cancelarMatr();

            $p3->setNome("Claudio");
            $p3->setIdade(52);
            $p3->setSalario("2500.75");
            $p3->receberAumento("402.50");

            $p4->setNome("Fabiana");
            $p4->setIdade(23);
            $p4->setSetor("Estoque");
            


            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);




        ?>
    </pre>
    
</body>
</html>