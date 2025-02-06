<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de moeda 1.0</h1>
    </header>
    <main>
        <?php 
                     
            $valor = $_GET["vlr"];
            $convert = $valor / 5.79;

            print "<p>Seus <strong>R$ " . number_format($valor, 2, ',', '.') . "</strong> convertidos equivalem a <strong>US$ " . number_format($convert, 2) . "</strong><br></p>";
            print "<p>A cotação de hoje é <strong>R$ 5,79</strong></p>"
        ?>
        <p class="voltar"><a href="javascript:history.go(-1)">← VOLTAR</a></p>
    </main>

    
</body>
</html>