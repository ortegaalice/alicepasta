<?php
// Dados
$empresa = "XPTO123";
$funcionarios = 40;
$anoFundacao = 2010;
$anoAtual = 2026;

// Cálculo 1
$tempoEmpresa = $anoAtual - $anoFundacao;

// Cálculo 2
$faturamentoAnual = 50000 * 12;

// Comparação
$porte = ($funcionarios >= 50) ? "Médio porte" : "Pequeno porte";

// Saída
echo "Empresa: " . $empresa . "<br>";
echo "Funcionários: " . $funcionarios . "<br>";
echo "Tempo: " . $tempoEmpresa . " anos<br>";
echo "Faturamento anual: " . $faturamentoAnual . "<br>";
echo "Porte: " . $porte;
?>