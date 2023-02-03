<?php
session_start();

if(isset($_SESSION['aviso'])){
    echo $_SESSION['aviso'];
    echo $_SESSION['aviso'] = '';
}
?>
<form method="POST" action="validacao.php">
    <label>
        Qual seu nome ?<br />
        <input type="text" name="user">
        <br />
    </label>
    <input type="submit" value="Salvar">
</form>