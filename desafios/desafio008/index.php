<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08 Calculo Raiz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET["num"] ?? 1;
    ?>

    <main>
        <h1 class="titulos">Informe um Número</h1>
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Número:</label>
            <input type="number" name="num" id="num" value="<?=$numero?>" step="0.001"><br>                       
            <button type="submit">Calcular Raízes</button>
        </form>
        
    </main>    
        
    <section>
        <h1 class="titulos">Resultado Final</h1>
        
        <article>
            <?php
                
                // primeira forma de resolver

                //$raizq = sqrt($numero);
                //$raizcub = pow($numero, 1/3);

                // segunda forma de resolver

                $raizq = $numero ** (1/2);
                $raizcub = $numero ** (1/3);

                echo "<p>Analisando o numero <strong>$numero</strong> temos:</p>";

                echo "<ul><li><p>A Raiz Quadrada de <strong>$numero</strong> é igual a: <strong>" . number_format($raizq, 3, ',', '.') . "</strong>.</p></li>";
                echo "<li><p>A Raiz Cúbica de <strong>$numero</strong> é igual a: <strong>" . number_format($raizcub, 3, ',', '.') ."</strong>.</p></li></ul>";
            ?>
        </article>
     
    </section>    

</body>
</html>