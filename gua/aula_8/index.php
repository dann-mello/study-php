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
    require_once 'Pessoa.php';
    require_once 'Professor.php';
    require_once 'Aluno.php';
    require_once 'Funcionario.php';

    $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3 = new Professor();
    $p4 = new Funcionario();

    $p1->setNome('Daniel');
    $p2->setNome('Samuel');
    $p3->setNome('Juliana');
    $p4->setNome('Ildson');

    $p1->setSexo('M');
    $p2->setCurso('Informática');
    $p3->setSalario('4500');
    $p4->setSetor('Estoque');

    // $p1->receberAumento(15); //FATAL ERRO
    // $p2->mudarTrabalho();//FATAL ERRO
    // $p3->cancelarMatricula();//FATAL ERRO

    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);
    
    ?>
    </pre>
</body>
</html>