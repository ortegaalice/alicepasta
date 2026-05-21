<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Moeda</title>
</head>
<body>

    <h1>Conversor de Real para Dólar</h1>

    <form method="POST">
        <label>Digite um valor em reais:</label>
        <input type="number" name="valor" step="0.01" required>

        <button type="submit">Converter</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST["valor"] ?? 0;

    $inicio = date("m-d-Y", strtotime("-7 days"));
    $fim = date("m-d-Y");

    $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='" .
    $inicio . "'&@dataFinalCotacao='" . $fim . "'&$top=100&$format=json&$select=cotacaoCompra";

    $dados = json_decode(file_get_contents($url), true);

    $dolar = $dados['value'][0]['cotacaoCompra'];
    $result = $valor / $dolar;

    echo "<h2>Resultado da Conversão:</h2>";

    $padrao_brasil = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    $padrao_eua = numfmt_create("en_US", NumberFormatter::CURRENCY);

    echo "<p><strong>Valor em Reais (R$): </strong>" .
    numfmt_format_currency($padrao_brasil, $valor, "BRL") . "</p>";

    echo "<p><strong>Valor em Dólares (US$): </strong>" .
    numfmt_format_currency($padrao_eua, $result, "USD") . "</p>";

    echo "<p><strong>Cotação do Dólar (US$): </strong>" .
    numfmt_format_currency($padrao_eua, $dolar, "USD") . "</p>";
}
?>

</body>
</html>