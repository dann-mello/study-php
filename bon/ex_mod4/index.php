<?php
session_start();
if(!isset($_COOKIE['usuario'])){
    header('location: login.php');
    exit;
}else{
    echo 'Olá ',$_COOKIE['usuario'];
}
?>

<a href="logout.php">Sair da sessão</a>
