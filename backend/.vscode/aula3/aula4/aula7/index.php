<?php
$funcionarios = [
    ["nome" => "Ana", "cargo" => "Analista", "salario" => 1000],
    ["nome" => "Carlos", "cargo" => "Desenvolvedor", "salario" => 1000],
    ["nome" => "Mariana", "cargo" => "Gerente", "salario" => 1000],
    ["nome" => "Marcos", "cargo" => "Tecnico", "salario" => 1000],
];

echo "<strong>Funcionario: </strong>" . $funcionarios[2]["nome"] . "<strong><br> Cargo: </strong>" . $funcionarios[2]["cargo"];

  foreach ($funcionarios as $f) {
    echo $f["nome"] ." - " . $f["cargo"] . "<br>";
  }
?>

