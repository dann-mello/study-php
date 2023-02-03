<?php
$nome = filter_input(INPUT_POST, 'nNome', FILTER_SANITIZE_SPECIAL_CHARS);

if($nome){
    $listaPast = file_get_contents('lista_de_nomes.txt').'<li>'.$nome.'</li>'."\n";
    file_put_contents('lista_de_nomes.txt', $listaPast);
    header('location: index.php');
    exit;
    
}else{
    header('location: index.php');
    exit;
}