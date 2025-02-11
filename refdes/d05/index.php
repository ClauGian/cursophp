<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor = $_GET['vlr'] ?? '0';
    ?>
    <main>
        <h1>Analisador de Números Reais</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Número Real</label>
            <input type="number" name="vlr" id="vlr" value="<?$valor?>" step="0.001">
            <button type="submit">Analisar</button>
        </form>
    </main>
    <section>
        <h2>Analisando Número Real</h2>
        <article>
            <?php 
                $numint = floor($valor);
                $numdec = $valor - $numint;

                echo "<h3>Analisando o número <strong><u>" . number_format($valor, 3, ',', '.') . "</u></strong> informado temos:</h3>";

                echo "<p>A parte inteira do número é: <strong>" . number_format($numint, 0, ',', '.') . "</strong></p>";

                echo "<p>A parte fracionária do número é:<strong> " . number_format($numdec, 3, ',', '.') . "</strong></p>";
            
            ?>
        </article>
    </section>
</body>
</html>