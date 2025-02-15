<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando o Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <main>

        <h1>Calculadora de Tempo</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="minutos">Informe o total de segundos</label>
            <input type="number" name="seg" id="seg" value="<?= $segundos?>" >
            <button type="submit">Calcular</button>
        </form>

    </main>

    <section>

        <h2>Destrinchado o Tempo</h2>

        <article>
            <strong></strong>
            <?php 
                if (isset($_GET["seg"])) {
                    $segundos = (int)$_GET["seg"] ?? ' ';
                    $seg = $_GET['seg'];                   

                    $semanas = floor($segundos / 604800);
                    $segundos %= 604800;
                    $dias = floor($segundos / 86400);
                    $segundos %= 86400;
                    $horas = floor($segundos / 3600);
                    $segundos %= 3600;
                    $minutos = floor($segundos / 60);
                    $segundos %= 60;

                    echo "<ul>

                        <p><strong>" . number_format($seg, 0, ',', '.') . "</strong> correspondem a: </p>
                        <p><li><strong>$semanas → </strong>Semanas</li></p>
                        <p><li><strong>$dias → </strong>Dias</li></p>
                        <p><li><strong>$horas → </strong>Horas</li></p>
                        <p><li><strong>$minutos → </strong>Minutos</li></p>
                        <p><li><strong>$segundos → </strong>Segundos</li></p>
                    
                    </ul>";

                }
            
            ?>
            
        </article>

        <img src="tabela.png" alt="tabela de minutos">
        
    </section>
</body>
</html>