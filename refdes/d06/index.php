<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia da Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $dividendo = $_GET["divid"] ?? '0';
        $divisor = $_GET["div"] ?? '1';    
    ?>

    <main>

        <h1>Anatomia de uma divisão.</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="divid" id="dividendo" value="<?$dividendo?>" required>
            <label for="divisor">Divisor</label>
            <input type="number" name="div" id="divisor" value="<?$divisor?>" required>
            <button type="submit">Calcular</button>
        </form>

    </main>

    <section>

        <h2>Estrutura de uma divisão</h2>

        <article>

            <?php 
                $resultado = intdiv($dividendo, $divisor);
                $resto = ($dividendo % $divisor);

                echo "<div class='container'>";
                echo "<div class='dividendo'>$dividendo</div>";
                echo "<div class='divisor'>$divisor</div>";
                echo "</div>";
                
                echo "<div class='container'>";
                echo "<div class='resto'>$resto</div>";
                echo "<div class='resultado'>$resultado</div>";
                echo "</div>";                
            ?>

        </article>
    </section>    
</body>
</html>