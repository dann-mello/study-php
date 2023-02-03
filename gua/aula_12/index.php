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
        require_once 'Video.php';
        // require_once 'Pessoa.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';
        $v = [1,2,3];
        $v[0] = new Video('Aula 1 de POO');
        $v[1] = new Video('Aula 12 de PHP');
        $v[2] = new Video('Aula 15 de SQL');

        // $p = new Pessoa('Daniel', 19, 'M');//ERRO - classe abstrata
        $g[0] = new Gafanhoto('Daniel', 19, 'M', 'd_19');
        $g[1] = new Gafanhoto('Creuza', 29, 'F', 'creuzita123');

        $vis[0] = new Visualizacao($g[0], $v[2]);
        $vis[1] = new Visualizacao($g[0], $v[1]);

        print_r($vis);
        ?>
    </pre>
</body>
</html>