<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07 Calculo Salario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET["sal"] ?? 0;        
        $salmin = 1518
    ?>

    <main>
        <h1 class="titulos">Analise seu Salário</h1>
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salario:</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01"><br> 
            <p>Valor do salário mínimo em 2025: <strong>R$ 1.518,00</strong></p>           
            <button type="submit">Analisar</button>
        </form>
        
    </main>    
        
    <section>
        <h1 class="titulos">Resultado da Análise</h1>
        
        <?php
            
            $resultado = intdiv ($salario, $salmin);
            $resto = $salario % $salmin;

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "<p>Seu salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " corresponde à<br> <strong>" . number_format($resultado, 0, ',', '.') ." salários mínimos,</strong>  mais <strong>" . numfmt_format_currency($padrao, $resto, "BRL") . "</strong> reais.</p>";

        ?>
        
    </section>    

</body>
</html>