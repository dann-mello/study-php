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
        <h2>Especializações de Animal</h2>
    <?php
    require_once './especializacoes/Ave.php';
    require_once './especializacoes/Mamifero.php';
    require_once './especializacoes/Reptil.php';
    require_once './especializacoes/Peixe.php';
    $m = new Mamifero;
    $r = new Reptil;
    $p = new Peixe;
    $a = new Ave;

    $m->setPeso(85.3);
    $m->setIdade(2);
    $m->setMembros(4);
    $m->locomover();//Carrendo
    $m->alimentar();//Mamando
    $m->emitirSom();//Som de Mamifero
    print_r($m);

    $p->setPeso(0.35);
    $p->setIdade(1);
    $p->setMembros(0);
    $p->locomover();//Nadando
    $p->alimentar();//Comendo subs
    $p->emitirSom();//Peixe não faz som
    $p->soltarBolha();
    print_r($p);

    $a->setPeso(0.89);
    $a->setIdade(2);
    $a->setMembros(2);
    $a->locomover();//Voando
    $a->alimentar();//comer frutas
    $a->emitirSom();//som de ave
    $a->fazerNinho();
    print_r($a);
    ?> 
    </pre>
<pre>
    <h2>Folhas descendentes de Animal</h2>
    <?php
        require_once './folhas/Cachorro.php';
        require_once './folhas/Canguru.php';
        require_once './folhas/Tartaruga.php';

        $c = new Cachorro;
        $c2 = new Canguru;
        $t = new Tartaruga;

        $t->setPeso(20);
        $t->setIdade(130);
        $t->setMembros(4);
        $t->locomover();
        $t->alimentar();
        $t->emitirSom();
        print_r($t);

        $c2->setPeso(55.30);
        $c2->setIdade(3);
        $c2->setMembros(4);
        $c2->locomover();
        $c2->alimentar();
        $c2->emitirSom();
        $c2->usarBolsa();
        print_r($c2);

        $c->setPeso(3.94);
        $c->setIdade(5);
        $c->setMembros(4);
        $c->locomover();
        $c->alimentar();
        $c->emitirSom();
        $c->abanarRabo();
        print_r($c);

    ?>
</pre>
</body>
</html>