<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>

<body>
    <pre>
        <?php
        require_once "Caneta.php";
        $c1 = new Caneta('Caneta Faber Castle', 'Verde', 1.1);
        print_r($c1);
        ?>
    </pre>
</body>

</html>