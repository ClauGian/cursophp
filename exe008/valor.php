<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de moeda 2.0</h1>
    </header>
    <main>
    <?php

        // Obtendo a data atual no formato correto para a API (MM-DD-YYYY)
        $data = date('m-d-Y');

        // Montando a URL corretamente
        $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='$data'&\$format=json&\$select=cotacaoVenda";

        // Inicializando cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($ch);
        curl_close($ch);

        if ($json === false) {
            die("Erro ao acessar a API do Banco Central.");
        }

        // Decodificando JSON
        $data = json_decode($json, true);

        if ($data === null || empty($data['value'][0]['cotacaoVenda'])) {
            die("Erro ao obter a cotação do dólar.");
        }

        // Obtendo a cotação do dólar
        $cotacao_dolar = $data['value'][0]['cotacaoVenda'];

        // Valor em reais informado pelo usuário
        $valor = $_GET["vlr"]; 
        

        // Convertendo para dólares
        $valor_convertido = $valor / $cotacao_dolar;

        // Exibindo o resultado
        echo "<p>O valor de R$ " . number_format($valor, 2, ',', '.') . " equivale a: <strong>" . number_format($valor_convertido, 2, ',', '.') . " dólares.</strong></p>";

        echo "<p>O valor da cotação do Dólar é: " . number_format($cotacao_dolar, 4, ',', '.') . " fonte: <strong>Banco Central do Brasil</strong></p>"

    ?>

        <p class="voltar"><a href="javascript:history.go(-1)">← VOLTAR</a></p>
    </main>

    
</body>
</html>