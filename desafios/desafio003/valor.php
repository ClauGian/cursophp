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
                     
            $reais = $_GET["vlreais"] ?? 0;
            $dolar = $reais / 5.79;

            //print "<p>Seus <strong>R$ " . number_format($reais, 2, ',', '.') . "</strong> convertidos equivalem a <strong>US$ " . number_format($dolar, 2) . "</strong><br></p>";

            // Formatação de moedas com internacionalização

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            print "<p>Seus <strong> " . numfmt_format_currency($padrao, $reais, "BRL") . "</strong> convertidos equivalem a <strong> " . numfmt_format_currency($padrao, $dolar, "USD") . "</strong><br></p>";


            print "<p>Com a cotação à <strong>R$ 5,79</strong></p>"
        ?>
        <p class="voltar"><a href="javascript:history.go(-1)">← VOLTAR</a></p>
    </main>

    
</body>
</html>