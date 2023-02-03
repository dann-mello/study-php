<?php
session_start();
$nome = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);

if($nome){
    setcookie('usuario', $nome, time() + 86400);
    header('location: index.php');
    exit;
}else{
    $_SESSION['aviso'] = 'Preencha os campos corretamente';
    header('location: login.php');
    exit;
}