<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do formulário retroalimentado.
        $valor1 = $_GET['vlr1'] ?? 0;
        $valor2 = $_GET['vlr2'] ?? 0;
    ?>

    <main>
        <h1>Somador de Valores</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="vlr1">Valor 1</label>
            <input type="number" name="vlr1" id="vlr1" value="<?=$valor1?>">
            <label for="vlr2">Valor 2</label>
            <input type="number" name="vlr2" id="vlr2" value="<?=$valor2?>">
            <input type="submit" value="Somar">

        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $valor1 + $valor2;  
            print "<p>A soma entre $valor1 e $valor2 é <strong>igual a: $soma</strong>.</p>";
        ?>

    </section>
    
</body>
</html>