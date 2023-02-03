<?php
// $array = range('A', 'G');

// foreach($array as $item){
//     echo $item.'<br />';
// }

// $array = [
//     'nome' => 'Daniel',
//     'idade' => 19,
//     'empresa' => 'Putero de esquina',
//     'cor' => 'preto',
//     'profissão' => 'Rodado',
//     'carro' => 'Mercedes Benz A 250'
// ];

// if(key_exists('carro', $array)){
//     $carro = $array['carro'];
//     echo $carro;
// }else{
//     echo 'Valor não encontrado';
// }

// $array = [
//     'nome' => 'Daniel',
//     'idade' => 19,
//     'empresa' => 'Putero de esquina',
//     'cor' => 'preto',
//     'profissão' => 'Rodado',
//     'carro' => 'Mercedes Benz A 250'
// ];

// $chaves = array_keys($array);
// $valores = array_values($array);

// print_r($chaves).'<br />';
// print_r($valores);

$array = [
    'nome' => 'Daniel',
    'idade' => 19,
    'empresa' => 'Putero de esquina',
    'cor' => 'preto',
    'profissão' => 'Rodado',
    'carro' => 'Mercedes Benz A 250',
    'escola' => 'CG'
];

?>



<!-- <table border="1">
    //<?php
        // foreach($array as $index => $valores){
        //     echo'<tr>
        //             <th>'.$index.'</th>
        //             <td>'.$valores.'</td>
        //          </tr>';
        // }

        //
        ?>
</table> -->


<!-- Ex2 -->
<!-- <table border="1">
    <tr>
        <?php //foreach($array as $index => $valores){ echo '<th>'.$index.'</th>'; } ?>
    </tr>
    <tr>
        <?php //foreach($array as $index => $valores){ echo '<td>'.$valores.'</td>'; } ?>
    </tr>
</table> -->

<!-- Refatorando Ex2 -->

<?php
//$chave = array_keys($array);
//$valores = array_values($array);
?>
<!-- <table border="1">
    <tr>
        <?php //foreach($array as $chave){ echo '<th>'.$chave.'</th>'; } ?>
    </tr>
    <tr>
        <?php //foreach($array as $valores){ echo '<td>'.$valores.'</td>'; } ?>
    </tr>
</table> -->

<?php
// $array2 = ['a', 'b', 'c', 'd', 'e', 'f'];
// $retorno = array_slice($array2, 1,3);
// print_r($retorno);´

// $array2 = ['a', 'b', 'c', 'd', 'e', 'f'];
// array_splice($array2, 2, 4);

// print_r($array2);

// $array2 = [1, 2, 3, 4, 5];

// function somar_array2($subtotal, $item){
//     $subtotal += $item;
//     return $subtotal;
// };

// $soma_array = array_reduce($array2, 'somar_array2');

// echo $soma_array;

// function total_m($i, $item){
//     if($item['sexo'] === 'M'){
//         $i++;
//     };
//     return $i;
// };

// $pessoas = [
//     ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
//     ['nome' => 'Ciclano', 'sexo' => 'M', 'nota' => 7],
//     ['nome' => 'Beltrano', 'sexo' => 'F', 'nota' => 10],
//     ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 8],
//     ['nome' => 'Cinthia', 'sexo' => 'F', 'nota' => 9],
//     ['nome' => 'Jessica', 'sexo' => 'F', 'nota' => 9],
// ];

// $total = array_reduce($pessoas, 'total_m');

// echo $total;//Retorna 3

$lista = ['Daniel', 19, 'skate', 'rock'];

// $nome = $lista[0];
// $idade = $lista[1];
// $hobbie = $lista[2];
// $musica = $lista[3];
list($nome, $idade, $hobbie, $musica) = $lista;

echo $nome.' tem '.$idade.' anos e gosta de andar de '.$hobbie.' ouvindo '.$musica.'.';