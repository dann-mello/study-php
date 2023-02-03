<!-- Variáveis -->
<!-- <?php
        $nome = 'Daniel'; //String
        $idade = 19; //Inteiro
        $dormindo = true; //Boolean
        $vazia = null; //Vazio
        $sobrenome = ''; //String
        ?> -->

<!-- <?php
        $nome = 'Daniel';
        $sobrenome = 'Melo';

        $nomeCompleto = $nome;
        $nomeCompleto .= $sobrenome; //. + - / *
        echo $nomeCompleto
        ?> -->


<!-- <?php
        function msgProducts($numProducts)
        {
            $plural = ["", ""];
            $mensagem = "Existe{$plural[0]} {$numProducts} produto{$plural[1]} no estoque.";
            if ($numProducts > 1) {
                $plural[0] = "m";
                $plural[1] = "s";
                return $mensagem;
            } else {
                return $mensagem;
            }
        }

        echo msgProducts(5);


        ?> -->

<!-- Array -->
<!-- <?php
$ingredientes = ['Açucar', 'Farinha de Trigo', 'Ovo', 'Leite', 'Fermento em pó'];
    echo $ingredientes[4];
    echo $ingredientes[9]; // Erro

$numerosDaMega = [28, 36, 10, 11, 5];
    echo 'Numero 1: '.$numerosDaMega[2].'<br/>';
    echo 'Numero 2: '.$numerosDaMega[0].'<br/>';

//Spread
$ingredientes2 = [...$ingredientes, 'Corante'];

echo $ingredientes2[0].'<br/>';
print_r($ingredientes2)
?> -->

<?php
$lista = [
    'nome' => 'Daniel',
    'idade' => 19,
    'Atributos' => [
        'força' => 60,
        'Agilidade' => 80,
        'Destreza' => 50
    ],
    'vida' => 1000,
    'mana' => 928
];

echo 'Nome: '.$lista['nome'].'<br/>';
echo 'Força: '.$lista['Atributos']['força'].'<br/>';
echo 'Vida: '.$lista['vida'].'<br/>';
?>

