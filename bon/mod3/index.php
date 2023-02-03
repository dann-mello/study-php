<!-- <?php
// function subsequente() {
//     for($q = 0; $q < 10; $q++){
//         echo $q.'<br/>';
//     }

//     echo '<hr/>';
// }

// subsequente();

?> -->

<!-- <?php
//Function com parâmetros
// function somar($n1, $n2) {
//     $total = $n1 + $n2;
//     return $total;
// }

// $soma = somar(10, 6);
// echo $soma
?> -->

<!-- <?php
//Function com parâmetros opcionais
// function somar($n1, $n2, $n3 = 0) {
//     $total = $n1 + $n2 + $n3;
//     return $total;
// }

// echo somar(10, 6).'<br/>';
// echo somar(10, 6, 5).'<br/>';
// echo somar(10, 6, 5, 6).'<br/>';
// echo somar(10).'<br/>';

//Function type
// function somar (int $n1, int $n2){
//     $somar = $n1 + $n2;
//     return $somar;
// }

// echo somar(1.23232356, 42.5656449849);
// echo somar(-1.23232356, -42.5656449849);
// // echo somar('Teste', 2.5);ERROR
// // echo somar(2.4, 1.1);

?> -->

<!-- <?php
//Function por referência ou valor
// function somar($n1, $n2){
//     return $n1 + $n2;
// }

// $x = 3;
// $y = 2;
// $total = somar($x, $y);//Parâmetro por valor
// echo $total;

// function somar($n1, $n2, $total){//Símbolo '&' identifica parâmetro por referência
//     // $n1 = 10;
//     // $n2 = 15;
//     // $total = $n1 + $n2;

//     $total = $n1 + $n2;
// }

// $x = 3;
// $y = 2;
// $soma = 0;
// // echo $x.' + '.$y.' = '.$soma.'<br/>';
// somar($x, $y, $soma);//Parâmetro por valor
// echo $x.' + '.$y.' = '.$soma;//Resultado após a remoção do '&'

//Funções anônimas
// function (){
    
// }

// $dizimo = function (int $valor){
//     return $valor * 0.1;
// };

// // echo $dizimo(90);
// $funcao = $dizimo;
// echo $funcao(82);

//Arrow functions
// $dizimo = fn(int $valor) => $valor * 0.1;

// echo $dizimo(982);

//Funções nativas de matemática
// $numero = -8.4;
// $numero2 = 2.1;
// $lista = [1, 4, 9, 8];
// echo abs($numero).'<br/>';//Retorna número absoluto(positivo)
// echo pi().'<br/>';
// echo floor($numero2).'<br/>';//Arredondar número para baixo
// echo ceil($numero2).'<br/>';//Arredondar número para cima
// echo round($numero2).'<br/>';//Ele depende do número para arredondar, não é forçado
// echo rand(1, 3).'<br/>';//Retorna um número aleatório
// echo max($lista).'<br/>';//Retorna o maior número do array
// echo min($lista).'<br/>';//Retorna o menor número do array

//Funções nativas de String
// $nomeSujo = '                Daniel                    ';
// $nomeCompleto = 'Daniel Coutinho Melo';
// $nomeLimpo = trim($nomeSujo);//Conserta os espaçamentos da minha string
// echo 'Nome sujo: '.strlen($nomeSujo).'. Nome limpo: '.strlen($nomeLimpo).'<br/>';//strlen(largura da string)
// echo mb_strtolower($nomeLimpo).'<br/>';//String minúsculas
// echo strtoupper($nomeLimpo).'<br/>';//String maiúsculas
// echo str_replace('Dan', 'Ran', $nomeLimpo).'<br/>';//Alterar a string
// echo str_replace('i', '|||', $nomeLimpo).'<br/>';//Alterar a string
// echo str_replace('u', 'o', $nomeLimpo).'<br/>';//Os argumentos que eu passei não se encontram na variável, contudo o PHP não me retorna um erro
// echo substr($nomeLimpo, 0,3).'<br/>';//Me retorna caracteres de determinado posição
// //Verfica se tem determinado caractere na string, se tiver me retorna a chave senão me retorna -1 ou nada, para representar false
// echo strpos($nomeLimpo, 'D').'<br/>';
// echo strpos($nomeLimpo, 'i').'<br/>';
// echo strpos($nomeLimpo, 'j').'<br/>';
// echo ucfirst($nomeLimpo).'<br/>';//Primeira letra maiúscula
// echo ucwords($nomeCompleto).'<br/>';//Primeira letra maiúscula de cada palavra da string
// print_r(explode(' ',$nomeCompleto.'<br/>'));//transforma em uma array
// echo number_format(12913.12, 1, ',', '.').'<br/>'//Formatador de números


//Funções Nativas Array
// $lista = ['nome1', 'nome2', 'nome3', 'nome4'];
// $alunos = ['Daniel','Pedro', 'Paulo', 'José', 'Franscisca', 'Paula'];
// $aprovados = ['Daniel','Pedro', 'José', 'Franscisca'];
// $reprovados = array_diff($alunos, $aprovados);
// $numeros = [10, 20, 24, 91, 18];
// // $filtrados = array_filter($numeros, fn($n) => $n % 2 == 0 ?? '');
// // $dobrados = array_map(function($item){
// //     return $item * 2;
// // }, $numeros);

// echo array_pop($numeros).'<br/>';//Remove último item do array
// echo array_shift($numeros).'<br/>';//Remove o primeiro item do array
// print_r($numeros);//Mostra o array sem o último item

// //in_array - existe dentro do array ?
// if(in_array(91, $numeros)){
//     echo '<br/>'.'Sim'.'<br/>';
// }

// echo array_search(91,$numeros).'<br/>';//Ele faz a mesma varredura do in_array, no entanto o array_search retorna a posição real
// rsort($numeros);//Ordem decrescente
// sort($numeros);//Ordem crescente
// asort($numeros);//Ordem crescente tendo relação com a chave e valor original
// arsort($numeros);//Ordem decrescente tendo relação com a chave e valor original
// explode('', $string);//transforma uma string em um array 
// implode('', $string);//transforma um array em uma string

// print_r($numeros).'<br/>';
// print_r( array_reverse($numeros));
// echo count($lista);//Tamanho do array

?> -->

<!-- <?php
// echo time().'<br/>';//Milisegundos desde seu início(01/01/1970);
//
// echo date('N').'<br/>';//Horário da inglaterra(padrão)
// //echo ini_get('date.timezone');retorno o timezone padrão setado no apache

// $data = '2020-03-07';
// $time = strtotime($data);//Recebe a data no formato padrão e ele transforma em time
// // echo $time.'<br/>';
// echo date('d-m-y', 0).'<br/>';
// echo date('d-m-y', $time);

// ?> -->

<?php
// function returnDate($data){
//     $dias_semana = [
//         'Domingo', 
//         'Segunda-Feira', 
//         'Terça-Feira', 
//         'Quarta-Feira', 
//         'Quinta-Feira', 
//         'Sexta-Feira', 
//         'Sábado'];
//     $nDay = date('w', strtotime($data));
//     $convert = date('d/m/Y ', strtotime($data));
//     return $convert .= $dias_semana[$nDay];
// }

// $data_atual = '01-0-5';

// echo returnDate($data_atual);

// require('header.php');
//Ou
include_once('header.php');
include_once('header.php');
include_once('header.php');

?>