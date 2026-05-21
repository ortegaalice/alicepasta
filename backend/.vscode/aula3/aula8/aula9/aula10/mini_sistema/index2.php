<?php
session_start();
?>

<?php include "header.php"; ?>
<link rel="stylesheet" href="estilo.css">

<h2>Cadastro do Usuário</h2>

<form action="salvar.php" method="post">
    Nome: <br>
    <input type="text" name="nome"> <br><br>

    Cor favorita: <br>
    <input type="text" name="cor"> <br><br>

    <input type="submit" value="Salvar">
</form>

<?php include "footer.php"; ?>