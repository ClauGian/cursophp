<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08 Calculo Raiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <main>
        <h1 class="titulos">Informe um Número</h1>
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Número:</label>
            <input type="number" name="num" id="num" step="0.001"><br>                       
            <button type="submit">Calcular</button>
        </form>
        
    </main>    
        
    <section>
        <h1 class="titulos">Resultado Final</h1>
        
        <article>
            <?php
                $numero = $_GET["num"] ?? 0;
                $raizq = sqrt($numero);
                $raizcub = pow($numero, 1/3);
                $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
                echo "<ul><li><p>A Raiz Quadrada de <strong>$numero</strong> é igual a: <strong>" . number_format($raizq, 3, ',', '.') . "</strong>.</p></li>";
                echo "<li><p>A Raiz Cúbica de <strong>$numero</strong> é igual a: <strong>" . number_format($raizcub, 3, ',', '.') ."</strong>.</p></li></ul>";
            ?>
        </article>
     
    </section>    

</body>
</html>