<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número antecessor</title>
</head>
<body>
    <!-- personalizar a página do número antecessor e posterior -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #c5c5c5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgb(58, 182, 182);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
            width: 350px;
            text-align: center;
        }

        h1 {
            color: white;
            margin-bottom: 20px;
        }

        input[type="number"] {
            width: 90%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 16px;
        }

        button {
            background-color: white;
            color: rgb(58, 182, 182);
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }

        .resultado {
            margin-top: 20px;
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }
    </style>
</body>
</html>

<div class="container">
        <h1>Número Antecessor e Posterior</h1>

        <form method="POST">
            <input type="number" name="numero" placeholder="Digite um número" required>
            <button type="submit">Calcular</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $antecessor = $numero - 1;
    $posterior = $numero + 1;

    echo "<div class='resultado'>";
    echo "Número: " . $numero . "<br>";
    echo "Antecessor: " . $antecessor . "<br>";
    echo "Posterior: " . $posterior;
    echo "</div>";
}
?>

</div>

</body>
</html>

       