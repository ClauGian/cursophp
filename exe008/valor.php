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
        <h1>Conversor de moeda 1.0</h1>
    </header>
    <main>
        <?php

            $data = date('m-d-Y'); // Ajuste no formato da data
            $url = "https://olinda.bcb.gov.br/olinda/service/PTAX/version/v1/odata/DollarRateDate(dataCotacao=@dataCotacao)?@dataCotacao=''&$top=100&$format=json";

            // Usando cURL para maior compatibilidade
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $json = curl_exec($ch);
            curl_close($ch);

            if ($json === false) {
                die("Erro ao acessar a API do Banco Central.");
            }

            $data = json_decode($json, true);

            if ($data === null || empty($data['value'][0]['cotacaoCompra'])) {
                die("Erro ao decodificar os dados ou cotação não encontrada.");
            }

            $cotacao_dolar = $data['value'][0]['cotacaoCompra'];
            $valor = 100;
            $valor_convertido = $valor * $cotacao_dolar;

            echo "O valor de {$valor} dólares em reais é R$ " . number_format($valor_convertido, 2, ',', '.');


        ?>
        <p class="voltar"><a href="javascript:history.go(-1)">← VOLTAR</a></p>
    </main>

    
</body>
</html>