<?php
// Dados
$empresa = "XPTO123";
$funcionarios = 40;
$anoFundacao = 2010;
$anoAtual = 2026;

// Cálculos
$tempoEmpresa = $anoAtual - $anoFundacao;
$faturamentoAnual = 50000 * 12;
$porte = ($funcionarios >= 50) ? "Médio porte" : "Pequeno porte";

// Saída
echo "Empresa: " . $empresa . "<br>";
echo "Funcionários: " . $funcionarios . "<br>";
echo "Tempo: " . $tempoEmpresa . " anos<br>";
echo "Faturamento anual: " . $faturamentoAnual . "<br>";
echo "Porte: " . $porte . "<br><br>";

// 3 mensagens (direto no echo)
if ($tempoEmpresa >= 10) {
    echo "Empresa consolidada!<br>";
}

if ($porte == "Pequeno porte") {
    echo "Empresa em crescimento!<br>";
}

if ($faturamentoAnual > 500000) {
    echo "Bom faturamento!<br>";
}
?>