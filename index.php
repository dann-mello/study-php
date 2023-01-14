<!-- Variáveis -->
<!-- <?php
$nome = 'Daniel'; //String
$idade = 19; //Inteiro
$dormindo = true; //Boolean
$vazia = null;//Vazio
$sobrenome = '';//String
?> -->

<!-- <?php 
$nome = 'Daniel';
$sobrenome = 'Melo';

$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome;//. + - / *
echo $nomeCompleto
?> -->


<?php 
function msgProducts($numProducts)
{
 $plural = ["", ""];
 $mensagem = "Existe{$plural[0]} {$numProducts} produto{$plural[1]} no estoque.";
 if($numProducts > 1){
 $plural[0] = "m";
 $plural[1] = "s";
 return $mensagem;
 } else {
 return $mensagem;
 }
}

echo msgProducts(5);


?>

