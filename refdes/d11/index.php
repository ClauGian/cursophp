<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustando Valores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $percentual = 0;
        $percentual = $_GET["perc"] ?? '0';
        $valor = $_GET["vlr"] ?? '0';
    
    ?>

    <main>

        <h1>Reajustador de Valores</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="vlr">Informe o Valor</label>
            <input type="number" name="vlr" id="vlr" value="<?= $valor?>" min="0.10" step="0.01">
            <label for="perc">Percentual de Reajuste (Atualmente:<strong> <span id="percentualValor"><?= $percentual ?> %</strong></span>)</label>
            <input class="range" type="range" name="perc" id="perc" value="<?= $percentual?>" min="0" max="100" step="1" oninput="atualizarPorcentagem(this.value)">
            <button type="submit">Calcular</button>
        </form>

    </main>

    <section>

        <h2>Resultado do Reajuste</h2>

        <article>

            <?php 
                $reajuste = ($valor * $percentual) / 100;
                $total = ($valor + $reajuste);

                $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

                echo "<p> → O valor de <strong>" . numfmt_format_currency($padrao, $valor, 'BRL') . "</strong> com reajuste de <strong>$percentual%</strong> sofreu um aumento de <strong>" . numfmt_format_currency($padrao, $reajuste, 'BRL') . "</strong>, passando a valer <strong>" . numfmt_format_currency($padrao, $total, 'BRL') . "</strong>.</p>";
            
            ?>
        </article>
    </section>
    <script>
        function atualizarPorcentagem(valor) {
            document.getElementById("percentualValor").innerText = valor + "%";
        }
    </script> 
    
</body>
</html>