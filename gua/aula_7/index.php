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
    require_once 'Livro.php';
    require_once 'Pessoa.php';
    $p[0] = new Pessoa('Pedro', 22, 'M');
    $p[1] = new Pessoa('Maria', 31, 'M');

    $l[0] = new Livro('PHP Básico', 'José da Silva', 300, $p[0]);
    $l[1] = new Livro('POO com PHP', 'Apolônio Smith', 500, $p[1]);
    $l[1] = new Livro('PHP Avançado', 'Ana Julia', 800, $p[1]);

    $l[0]->abrir();
    $l[0]->avancarPag(90);
    $l[0]->avancarPag(100);
    $l[0]->voltarPag(80);
    $l[0]->voltarPag(280);
    ?>
    </pre>
</body>
</html>