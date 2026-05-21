<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Empresa</title>
</head>
<body>

<h1>Página da Empresa</h1>

<?php
// Dados básicos
$empresa = "XPTO123";
$funcionarios = 40;
$anoFundacao = 2010;

// Cálculo do tempo de empresa
$tempo = 2026 - $anoFundacao;

// Exibição das informações
echo "Empresa: " . $empresa . "<br>";
echo "Funcionários: " . $funcionarios . "<br>";
echo "Tempo de empresa: " . $tempo . " anos<br><br>";

// Mensagem 1
if ($tempo >= 10) {
    echo "Empresa experiente.<br>";
}

// Mensagem 2
if ($funcionarios < 50) {
    echo "Empresa de pequeno porte.<br>";
}

// Mensagem 3
echo "Bem-vindo à nossa página!";
?>

</body>
</html>