<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06 Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET["divid"] ?? 0;
        $divisor = $_GET["divis"] ?? 0;
    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo:</label>
            <input type="number" name="divid" id="dividendo" step="0.1"><br><br>
            <label for="divisor">Divisor:</label>
            <input type="number" name="divis" id="divisor" step="0.1"><br><br>
            <button type="submit">Calcular</button>
        </form>
        
    </main>    
        
    <section>
        <h1>Estrutura da Divisão</h1>
        
        <?php
            $resultado = $dividendo / $divisor;
            $resto = $dividendo % $divisor;
            echo "<div class='container'>";
            echo "<div class='dividendo'>$dividendo</div>";
            echo "<div class='divisor'>$divisor</div>";
            echo "</div>";
            echo "<div class='container'>";
            echo "<div class='resto'>$resto</div>";
            echo "<div class='resultado-valor'>" .number_format($resultado, 0, ',', '.') . "</div>";
            echo "</div>"; 
        ?>
        
    </section>    

</body>
</html>