<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustando Valores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $percentual = $_GET['perc'] ?? '0';
        $valor = $_GET['vlr'] ?? "0";
    
    ?>

    <main>

        <h1>Reajustador de Valores</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="vlr">Informe o Valor</label>
            <input type="number" name="vlr" id="vlr" value="<?= $valor?>" step="0,01">
            <label for="perc">Percentual de Reajuste (<?= $percentual?>%)</label>
            <input type="range" name="perc" id="perc" value="<?= $percentual?>" min="0" max="100"  oninput="atualizarPorcentagem(this.value)">
        </form>

    </main>

    <section>

        <h2></h2>

        <article>

            <?php 
            
            
            ?>
        </article>
    </section>
    <script>
        function atualizarPorcentagem(valor) {
            document.getElementById("percentualValor").innerText = valor + "%";
        }
    </script> 
    
</body>
</html>