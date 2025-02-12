<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando o Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        
    ?>

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
                    $dias = floor($segundos / )

                }

                



                echo "Qtde $semana sobra $sobra segundos";
            
            ?>

            <img src="tabela.png" alt="tabela de minutos">
        </article>
    </section>
</body>
</html>