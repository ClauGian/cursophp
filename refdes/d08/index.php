<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando Raizes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 
        $numero = $_GET["num"] ?? '0';
    ?>

    <main>

        <h1>Calculo de Raizes</h1>
        <h2>Informe um número</h2>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="num" id="num" value="<?$número?>" required >
            <button type="submit">Calcular Raizes</button>
        </form>

    </main>
    
    <section>

        <h2>Resultado</h2>

        <article>            

            <?php 
                $raiz_quadrada = sqrt($numero);
                $raiz_cubica = pow($numero, 1/3);

                echo "<h3>Analisando o número<strong> $numero </strong>temos:</h3>";
                echo "<p>A sua raiz quadrada é <strong>" . number_format($raiz_quadrada, 3, ',', '.') ."</strong></p>";
                echo "<p>A sua raiz cúbica é <strong>" . number_format($raiz_cubica, 3, ',', '.') ."</strong></p>";

            ?>

        </article>
    </section>
</body>
</html>