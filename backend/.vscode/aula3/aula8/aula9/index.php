<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato da Empresa</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container{
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        }

        h1, h2{
            text-align: center;
            color: #333;
        }

        label{
            font-weight: bold;
        }

        input{
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .btn{
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover{
            background-color: #0056b3;
        }

        .resultado{
            margin-top: 20px;
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Contato da Empresa</h1>

    <!-- Formulário enviando os dados -->
    <form method="POST">

        <!-- Campo do nome -->
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <!-- Campo do email -->
        <label>E-mail:</label>
        <input type="email" name="email" id="email" required>

        <!-- Campo do cargo -->
        <label>Cargo:</label>
        <input type="text" name="cargo" id="cargo" required>

        <input type="submit" value="Enviar" class="btn">
    </form>

    <?php

    // Verifica se os dados foram enviados
    if(isset($_POST["nome"], $_POST["email"], $_POST["cargo"])){

        // Recebe os dados do formulário
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cargo = $_POST["cargo"];

        // Exibe os dados na tela
        echo "<div class='resultado'>";
        echo "<h2>Dados Recebidos</h2>";
        echo "<hr>";
        echo "Nome: $nome <br><br>";
        echo "E-mail: $email <br><br>";
        echo "Cargo: $cargo";
        echo "</div>";
    }

    ?>

</div>

</body>
</html>