<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabela de Funcionários</title>
</head>
<body>

<h2>Lista de Funcionários</h2>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Cargo</th>
        <th>Salário</th>
    </tr>

<?php
// Array com vários funcionários 
$funcionarios = [
    [
        "nome" => "Jorge",
        "cargo" => "Professor",
        "salario" => 1000
    ],
    [
        "nome" => "Diogo",
        "cargo" => "Professor",
        "salario" => 1000
    ],
    [
        "nome" => "Fabiana",
        "cargo" => "Cuidadora",
        "salario" => 1000
    ]
];

// Percorrendo a lista
foreach ($funcionarios as $funcionario) {
    echo "<tr>";
    echo "<td>" . $funcionario["nome"] . "</td>";
    echo "<td>" . $funcionario["cargo"] . "</td>";
    echo "<td>" . $funcionario["salario"] . "</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>

