<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>licaojorge8</title>
</head>
<body>
    
<h1>informações da empresa</h1>

<?php
//calcular o tempo 
function calcularTempoEmpresa($anoFundacao, $anoAtual) {
    return $anoAtual - $anoFundacao;
}
//classficar a empresa
function classificarEmpresa($funcionario) {
    if ($funcionarios < 50) {
        return "Pequeno porte";
    } else {
        return "Médio ou Grande porte";
    }
}
//função reutilizada para mostrar os dados da empresa
function mostrarEmpresa($nome, $anoFundacao, $funcionarios) {

 //vai callcular o tempo da empresa 
    $tempo = calcularTempoEmpresa($anoFundacao, 2026);

    //classifica a empresa com outra funcao
    $porte = classificarEmpresa($funcionarios);

    //exibir as infromacões 
    echo "<h3>$nome</h3>";
    echo "Tempo de empresa: $tempo anos <br>";
    echo "Quantidade de funcionários: $funcionarios <br>";
    echo "Classificação: $porte <br><br>";
}


mostrarEmpresa("Tech Solutions", 2015, 30);
mostrarEmpresa("Mercado Central", 2008, 120);

?>
</body>
</html>