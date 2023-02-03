<!-- <?php
// Condicionais
$idade = 4;
    if($idade >= 18){
        echo 'Maior de idade';
    }else{
        echo 'Menor de idade';
    }
?> -->

<!-- <?php
// Condicional ternário
//(Condição) ? Positivo : Negativo;
$idade = (5 >= 18) ? 'Maior de idade' : 'Menor de idade';
    echo $idade;
?> -->

<!-- <?php
//Condicional NUll CAO -  Coalesce Assignment  Operator
$nome = 'Daniel';
// $sobrenome = ' Melo';

$nomeCompleto = $nome;
// $nomeCompleto .= $sobrenome; ERRO
// $nomeCompleto .= isset($sobrenome) ? $sobrenome : '';//Operador ternário para verificar a existência da variável + o método 'isset para verificar se esta setado'

//NUll CAO
$nomeCompleto .= $sobrenome ?? '';
echo $nomeCompleto
?> -->

<!-- <?php
//Switch case
$tipo = 'Vídeo';

switch($tipo){
    case 'Foto':
        echo 'Exibindo foto';
        break;
    case 'Vídeo':
        echo 'Exibindo vídeo';
        break;
    case 'Texto':
        echo 'Exibindo texto';
        break;
}
?> -->

<!-- <?php
//Loop While

$numero = 1;
while($numero <= 10){
    echo 'N: '.$numero.'<br/>';

    // $numero = $numero + 1;
    // $numero += 1;
    $numero++;
}
?> -->

<!-- <?php
//loop for
for ($i = 1; $i <= 10; $i++){
    echo $i.'<br/>';
};
?> -->

<!-- <?php
//loop forEach - Para Cada
$lista = ['Açucar', 'Farinha de Trigo', 'Ovo', 'Leite', 'Fermento em pó'];

echo '<h2>Ingredientes</h2>';
echo '<ul>';
foreach($lista as $chave => $ingrediente){
    echo '<li>'.$ingrediente.'</li><br/>';
}
echo '</ul>';
?> -->

<!-- <?php
//Exercicio-1
$i = 1;
while($i <= 30){
    for($idn = 1; $idn <= 10; $idn++){
        echo '-';
    }
    echo '<br/>';
    $i++;
}
?> -->

<?php
//Exercicio-2
for ($i = 0; $i <= 20 ;$i++){
    for($cont = 0; $cont < $i; $cont++){
        echo '-';
    }
    echo '<br/>';
}
?>