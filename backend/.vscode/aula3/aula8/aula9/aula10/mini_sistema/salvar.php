<?php
session_start();

// Guardando o nome na sessão
$_SESSION["usuario"] = $_POST["nome"];

// Criando cookie com a cor favorita
setcookie("cor", $_POST["cor"], time() + 3600);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sucesso</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #c5ced1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .sucesso-box {
            background-color: rgb(58, 182, 182);
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.2);
            width: 350px;
        }

        .sucesso-box h2 {
            color: white;
            margin-bottom: 20px;
        }

        .sucesso-box a {
            display: inline-block;
            text-decoration: none;
            background-color: white;
            color: rgb(58, 182, 182);
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .sucesso-box a:hover {
            background-color: #e6e6e6;
        }
    </style>
</head>

<body>

    <div class="sucesso-box">
        <h2>Dados salvos com sucesso!</h2>

        <a href="perfil.php">Ir para o perfil</a>
    </div>

</body>
</html>


