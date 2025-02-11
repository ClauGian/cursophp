<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 
        $valor1 = $_GET['vlr1'] ?? '1';
        $peso1 = $_GET['p1'] ?? '1';
        $valor2 = $_GET['vlr2'] ?? '1';
        $peso2 = $_GET['p2'] ?? '1';
    ?>

    <main>

        <h1>Médias Aritméticas</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="vlr1">Valor 1</label>
            <input type="number" name="vlr1" id="vlr1" value="<?= isset($valor1) ? $valor1 : ''?>" step="0.01">
            <label for="peso1">Peso Valor 1</label>
            <input type="number" name="p1" id="p1" value="<? $peso1?>" step="1">
            <label for="vlr2">Valor 2</label>
            <input type="number" name="vlr2" id="vlr2" value="<?= isset($valor2) ? $valor1 : ''?>" step="0.01">
            <label for="peso2">Peso Valor 2</label>            
            <input type="number" name="p2" id="p2" value="<? $peso2?>" step="1">
            <button type="submit">Calcular</button>
        </form>

    </main>

    <section>

    <h2>Calculo da Médias</h2>

        <article>

            <?php
                $mediasim = ($valor1 + $valor2) / 2;
                $mediapond = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);

                echo "<h3>Média Aritmética Simples</h3>";
                echo "<p>A média entre os valores <strong>$valor1</strong> e <strong>$valor2</strong> é igual a: <strong>" . number_format($mediasim, 2, ',', '.') . "</strong></p>";

                echo "<h3>Média Aritmética Ponderada</h3>";
                echo "<p>A média entre o valor <strong>$valor1</strong> com peso <strong>$peso1</strong> e o valor <strong>$valor2</strong> com peso <strong>$peso2</strong> é igual a: <strong>" . number_format($mediapond, 2, ',', '.') . "</strong></p>";
            ?>
        </article>
    </section>
</body>
</html>