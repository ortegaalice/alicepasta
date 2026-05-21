<?php
session_start();
?>

<?php include "header.php"; ?>
<link rel="stylesheet" href="estilo.css">

<h2>Perfil do Usuário</h2>

<?php
// Verificando se existe sessão
if(isset($_SESSION["usuario"])) {
    echo "Usuário: " . $_SESSION["usuario"] . "<br><br>";
} else {
    echo "Nenhum usuário encontrado.<br><br>";
}

// Verificando se existe cookie
if(isset($_COOKIE["cor"])) {
    echo "Cor favorita: " . $_COOKIE["cor"];
} else {
    echo "Nenhuma preferência salva.";
}
?>

<?php include "footer.php"; ?>