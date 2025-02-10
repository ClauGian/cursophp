<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $numero = $_GET["num"] ?? 0;
    ?>

    <main>

        <h1>Informe um número</h1>

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="num" id="num" value="<?$numero?>">
            <button type="submit">Calcular</button>            
        </form>

    </main>
    
    <section>

        <h1>Resultado Final</h1>

        <article>
            <?php 
                $ant = $numero - 1;
                $suc = $numero + 1;
                echo "<p>O número digitado foi $numero.</p>";
                echo "<p>Seu antecessor é: $ant.</p>";
                echo "<p>Seu sucessor é: $suc.</p>"
            ?>
        </article>

    </section>
    
</body>
</html>