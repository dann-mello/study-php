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
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';
        $c = new Mamifero();
        $l = new Lobo();
        $k = new Cachorro();
        $c->emitirSom();
        $l->emitirSom();

        $k->reagirFrase('Olá');
        $k->reagirFrase('Vai apanhar');
        $k->reagirHora(11, 45);
        $k->reagirHora(21, 00);
        $k->reagirDono(true);
        $k->reagirDono(false);
        $k->reagirIdadePeso(2, 12.5);
        $k->reagirIdadePeso(17, 4.5);
        ?>
    </pre>
</body>
</html>