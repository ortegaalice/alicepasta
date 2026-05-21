<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabela</title>
</head>
<body>
    <table>
        <h1> tabela nomes </h1>
        <tr>
            <th>Nome;</th>
            <th>Cargo;</th>
            <th>Salario;</th>
        </tr>
    </table>
</body>
</html>
<?php
$funcionarios = [
    ["nome" => "Ana", "cargo" => "Analista" => 1000],
    ["nome" => "nome" => "Carlos" => "Desenvolvedor" "salario" => 1000 ],
    ["nome" => "nome" => "Mariana", "cargo" => "Gerente", "salario" => 1000],
    ["nome" => "nome" => "Marcos", "cargo" => "Tecnico", "salario" => 1000],
];

echo "<strong>Funcionario: </strong>" . $funcionarios[2]
["nome"] . "<strong><br> Cargo: </strong>" . $funcionarios[2]
["cargo"];

  foreach ($funcionarios as $f) {
    echo $f["nome"] ." - " . $f["cargo"] . "<br>";
  }
?>



