<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Banco Central</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $reais = $_GET["vlreais"];

            $dolar = $reais / $cotacao;

            //Usando a biblioteca intl - (Internationalization)
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            print "<p>Seus <strong> " . numfmt_format_currency($padrao, $reais, "BRL") . "</strong> convertidos equivalem a <strong> " . numfmt_format_currency($padrao, $dolar, "USD") . "</strong><br></p>";

            print '<p>A cotação foi obtida no site do <a href="https://www.bcb.gov.br/" target="_blank">Banco Central do Brasil.</a></p>';
        
        ?>
        <button class="voltar"onclick="javascript:history.go(-1)"> ← Voltar </button>


    </main>

</body>
</html>