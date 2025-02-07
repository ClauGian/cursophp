<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 09 Calculo Média</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>    

    <main>
        <h1 class="titulos">Médias Aritméticas</h1>
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="nota1">Nota 1</label>
            <input type="number" name="n1" id="n1" step="0.01">
            <label for="peso1">Peso 1</label>  
            <input type="number" name="p1" id="p1"> 
            <label for="nota2">Nota 2</label>
            <input type="number" name="n2" id="n2" step="0.01">
            <label for="peso2">Peso 2</label>  
            <input type="number" name="p2" id="p2">

            <button type="submit">Calcular</button>

        </form>
        
    </main>    
        
    <section>
        <h1 class="titulos">Calculo das Médias</h1>
        
        <article>
            <?php
                $nota1 = $_GET["n1"] ?? 1;
                $peso1 = $_GET["p1"] ?? 1;
                $nota2 = $_GET["n2"] ?? 1;
                $peso2 = $_GET["p2"] ?? 1;
                
                $media_simples = ($nota1 + $nota2) / 2;
                $media_ponderada = ($nota1 * $peso1 + $nota2 * $peso2) / ($peso1 + $peso2);

                echo "A <strong>Média Aritmética Simples</strong> entre os valores é igual a:<strong> " . number_format($media_simples, 2, '.', ',') . "</strong><br>";
                echo "A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a:<strong> " . number_format($media_ponderada, 2, '.', ',') . "</strong>";
                
            ?>
        </article>
     
    </section>    

</body>
</html>