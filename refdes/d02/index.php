<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <main>

        <h1 id="titulos">Trabalhando com números aleatórios</h1>

        <?php 
            echo "<h2 style='color: black;'>Gerando um número aleatório entre<strong> 0 e 100</strong>.</h2>";

            if (isset($_GET["gerar"])) {
                $numero = mt_rand(0, 100);                        
            
            echo "<h3 style='color: blue;'>O número gerado foi: <strong>$numero</strong></h3>";
            }
        ?>

        <form method="get">
            <button type="submit" name="gerar">Gerar outro</button>
        </form>
    </main>

    
</body>
</html>