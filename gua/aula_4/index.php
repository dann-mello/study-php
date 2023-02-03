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
        require_once "ContaBanco.php";
        $c1 = new ContaBanco;
        $c1->setAbrirConta('Daniel Melo','CC');
        // $c1->setPagamentoMensal();
        // $c1->setFecharConta();
        // $c1->setSacarDinheiro(10);
        $c1->setSacarDinheiro(50);
        $c1->setFecharConta();
        print_r($c1);
        ?>
    </pre>
</body>

</html>