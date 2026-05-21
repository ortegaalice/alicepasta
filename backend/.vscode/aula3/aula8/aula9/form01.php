<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form01</title>
</head>
<body>
    <form method="GET">
        <label name="nome" method= "GET">Nome:</label>
        <input type="text" name= "nome" placeholder="Digite seu nome aqui">>
        <input type="submit" value="Enviar">
    </form>
        <?php
        $nome = $_GET["nome"];
        
        echo "<br> Nome Informado: $nome <br>";
         var_dump($_GET);

        ?>
</body>
</html>

