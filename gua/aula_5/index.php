<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Remoto</title>
</head>

<body>
    <pre>
        <?php
        require_once 'ControleRemoto.php';
        $controle_1 = new ControleRemoto;
        $controle_1->ligar();
        $controle_1->ligarMudo();
        $controle_1->maisVolume();
        $controle_1->maisVolume();
        $controle_1->maisVolume();
        $controle_1->maisVolume();
        $controle_1->maisVolume();
        $controle_1->maisVolume();
        $controle_1->maisVolume();
        $controle_1->maisVolume();
        $controle_1->maisVolume();
        $controle_1->abrirMenu();
        ?>
    </pre>
</body>

</html>