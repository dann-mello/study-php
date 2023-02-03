<form method ="POST" action="validacao.php">
    <label>
        Novo nome:<br />
        <input type="text" name="nNome">
    </label>
    <input type="submit" value="Adicionar">
</form>

<h2>Lista de Nomes</h2>
<ul>
 
<?php
    echo file_get_contents('lista_de_nomes.txt');
?>

</ul><button><a href="excluirLista.php">Excluir lista</a></button>