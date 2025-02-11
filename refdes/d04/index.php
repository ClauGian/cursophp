<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        
        $reais = $_GET["vlreais"] ?? '0';
    
    ?>

    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Quantos Reais deseja converter?</label>
            <input type="number" name="vlreais" id="reais" value="<?$reais?>" step=0.01>
            <button type="submit">Converter</button>
        </form>
    </main>

        <section>
            <h2>Conversor de Moedas v2.0</h2>
            <article>
                <?php  
                    $inicio = date("m-d-Y", strtotime("-7 days"));
                    $fim = date("m-d-Y");
                    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                    $dados = json_decode(file_get_contents($url), true);
                    $cotacao = $dados["value"][0]["cotacaoCompra"];
                
                    $dolar = $reais / $cotacao;

                    //Usando a biblioteca intl - (Internationalization)
                    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

                    print "<p>Seus <strong> " . numfmt_format_currency($padrao, $reais, "BRL") . "</strong> convertidos equivalem a <strong> " . numfmt_format_currency($padrao, $dolar, "USD") . "</strong><br></p >";

                    echo '<p style="font-size: 0.8em;"><sob>*</sob>A cotação de <strong>' . numfmt_format_currency($padrao, $cotacao, "BRL") . '</strong> foi obtida no site do <a href="https://www.bcb.gov.br/" target="_blank">Banco Central do Brasil.</a></p>';
            
                ?>
            </article>
        </section>
    
</body>
</html>