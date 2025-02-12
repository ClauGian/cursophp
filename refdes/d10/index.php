<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $ano = date('Y');
        $nasc = $_GET['anonasc'] ?? ' ';
        $anoinfor = $_GET['ano'] ?? $ano;
    ?>
    
    <main>
        <h1>Calculando sua Idade</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nasc">Ano de Nascimento</label>
            <input type="number" name="anonasc" id="nasc" value="<?= $nasc ?>">
            <label for="ano">Quer saber a idade em que ano? <strong>(estamos em <?= $ano?>)</strong></label>
            <input type="number" name="ano" id="ano" value="<?= $ano?>">
            <button type="submit">Calcular</button>

        </form>
<h4></h4>
    </main>

    <section>
    
        <h2>Resultado</h2>
    
        <article>

            <?php 

                $idade = $anoinfor - $nasc;

                echo "<p>Quem nasceu em <strong>$nasc</strong> tem ou terá <strong>$idade</strong> anos em <strong>$anoinfor</strong>.</p>";
            
            ?>
        </article>
    
    </section>



</body>
</html>