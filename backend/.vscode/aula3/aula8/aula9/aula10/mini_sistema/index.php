<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
</head>
<body>
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
        <div class="container">
            <div class="box">
                <form action= "" method="get">
                    <label>Salario:</label>
                    <br>
                    <input type="number" name="salario" step="0.01" required>
                    <p>Considerando salario minimo de <strong>R$ 1621,00</strong></p>
                    <button type="submit">Analisar</button>
                   
</form>
</div>
</div>
<?php
        if(isset($_GET["salario"])){
            $salario = $_GET["salario"];

            $minimo = 1621;

            $quantidade = floor($salario / $minimo);

            $sobra = $salario % $minimo;

            echo "<div class='resultado'>";

            echo  "<div class='resultado'>";

            echo "<h1>Análise do Salário</h1>";

            echo "<p>Quem recebe um salário de <strong>R$ " . number_format($salario, 2, ",", ".") . "</strong></p>";

            echo "<p>Ganha <strong>$quantidade</strong> salário(s) mínimo(s)</p>";

            echo "<p>E sobra: <strong>R$ " . number_format($sobra, 2, ",", ".") . "</strong></p>";

            echo "</div>";
        } 

        ?>
</body>
</html>