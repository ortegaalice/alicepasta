<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Decisões da Empresa</title>
</head>
<body>

<h1>Análise da Empresa</h1>

<?php
// quantidade funcionario
$funcionarios = 120;

echo "<h2>Resultados:</h2>";

// porte da empresa
if ($funcionarios < 50) {
    echo "Pequeno porte <br>";
} elseif ($funcionarios < 100) {
    echo "Médio porte <br>";
} else {
    echo "Grande porte <br>";
}
?>

</body>
</html>