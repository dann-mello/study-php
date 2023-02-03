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
    require_once 'Aluno.php';
    require_once 'Bolsista.php';
    require_once 'Tecnico.php';
    // $v1 = new Visitante('','','');
    // $v1->setNome('Gilberto Barros');
    // $v1->setIdade(17);
    // $v1->fazerAniver();
    // $v1->getIdade();
    $a = new Aluno('','','');
    $a->setNome('Pedro');
    $a->setMatricula(1111);
    $a->setIdade(16);
    $a->setSexo('M');
    $a->setCurso('Informática');
    $a->pagarMensalidade();

    print_r($a);

    $b = new Bolsista('','','');
    $b->setNome('Carlos');
    $b->setBolsa(12.5);
    $b->setMatricula(1112);
    $b->setIdade(17);
    $b->setCurso('ADM');
    $b->pagarMensalidade();
    print_r($b);

    $t = new Tecnico('','','');
    $t->setNome('Laura');
    $t->setRegistroProfissional('Bombeiro');
    print_r($t);
    ?>
    </pre>
</body>
</html>