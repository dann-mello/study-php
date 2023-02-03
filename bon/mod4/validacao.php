<?php 
session_start();
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($nome){
    setcookie('nome', $nome, time() + 86400);
    echo 'Nome: ',$nome,'<br />';
    echo 'E-mail: ',$email,'<br />';
    echo 'Idade: ',$idade,'<br />';
}else{
    $_SESSION['aviso'] = 'Preecha os campos corretamente';
    header('location: index.php');
    exit;
}