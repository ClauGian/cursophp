<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $salario = $_GET['sal'] ?? '0';
        $salario_minimo = '1518';
    ?>

    <main>

        <h1>Analisando seu Salário</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Informe seu Salário.</label>
            <input type="number" name="sal" id="salario" value="<?$salario?>" step="0.01" required>
            <button type="submit">Analisar</button>
            <p style='font-size: 0.8em;' >Considerando o salário mínimo no valor de:<strong> R$  <?= number_format($salario_minimo, 2, ',', '.')?></strong> </p>
        </form>

    </main>

    <section>

        <h2>Resultado da Análise</h2>

        <article>

            <?php 
                
                $qtde_Salario = intdiv($salario, $salario_minimo);
                $sobra = ($salario % $salario_minimo);

                $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

                echo "<p>Considerando quem recebe um salário de <strong>" . numfmt_format_currency($padrao, $salario, "BRL") . "</strong></p>";

                echo "<p>Este valor equivale a <strong>$qtde_Salario</strong> salários mínimos mais <strong>" . numfmt_format_currency($padrao, $sobra, "BRL") ."</strong> reais.</p>";


            ?>
        </article>
    </section>
    
</body>
</html>