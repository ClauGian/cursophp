<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor = $_GET['valor'] ?? 0;
    ?>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Quantos Reais deseja converter?</label>
            <input type="number" name="valor" id="valor" value="<?$valor?>" step=0.01>
            <button type="submit">Converter</button>
        </form>
    </main>

    <section>
        <article>
            <?php
                $cotacao = '5.81'; 
                $convert = $valor / $cotacao;
                $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
                $padrao2 = numfmt_create("us", NumberFormatter::CURRENCY);

                echo "<h3>Seus <i><strong>" . numfmt_format_currency($padrao, $valor, "BRL") . "</strong></i> correspondem a <i><strong>" . numfmt_format_currency($padrao2, $convert, "USD") . "</strong></i> dolares.</h3>"; 

                echo "<p style='font-size: 0.8em;'>Cotação de 10/02/2025: <strong>" . numfmt_format_currency($padrao, $cotacao, "BRL") . "</strong> informada diretamente no código.</p>"

            
            ?>

        </article>
    </section>
    
</body>
</html>