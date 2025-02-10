<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12 Calculando Tempo</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body> 

    <main>
        <h1 class="titulos">Calculadora de Tempo</h1>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label>Informe o tempo em segundos:</label>
            <input type="number" name="segundos" min="0" required>
            <button type="submit">Converter</button>
        </form>
    </main>

    <section>

        <h1 class="titulos">Totalizando o Tempo</h1>

        <article>
            <?php
                 
                if (isset($_GET["segundos"])) {
                    $seg = $_GET["segundos"];
                    $segundos = (int)$_GET["segundos"];
                    // Cálculo das unidades de tempo
                    $semanas = floor($segundos / (7 * 24 * 60 * 60));
                    $segundos %= (7 * 24 * 60 * 60);
                    $dias = floor($segundos / (24 * 60 * 60));
                    $segundos %= (24 * 60 * 60);
                    $horas = floor($segundos / (60 * 60));
                    $segundos %= (60 * 60);
                    $minutos = floor($segundos / 60);
                    $segundos %= 60;
                    // Exibir os resultados
                    echo "<div>
                        <p><strong>" . number_format($seg, 0, '.', '.') . "</strong> segundos correspondem a:</p>
                        <ul>
                        <p><li>Semanas: $semanas</li></p>
                        <p><li>Dias: $dias</li></p>
                        <p><li>Horas: $horas</li></p>
                        <p><li>Minutos: $minutos</li></p>
                        <p><li>Segundos: $segundos</li></ul></p>
                    </div>";
                }
            ?>
        </article>
    </section>

</body>
</html>
