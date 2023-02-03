<?php
session_start();
require_once('header.php');
if(isset($_SESSION['aviso'])){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
};

?>

<form method="POST" action="validacao.php">
    <label>
        Nome:<br />
        <input type="text" name="nome">
    </label>
    <br>
    <br>
    <label>
        E-mail:<br />
        <input type="text" name="email">
    </label>
    <br>
    <br>
    <label>
        Idade:<br />
        <input type="text" name="idade">
    </label>
    <br>
    <br>
    <input type="submit" value="Enviar">
    <a href="apagarCookie.php">Deletar cookie</a>
</form>