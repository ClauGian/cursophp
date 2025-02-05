<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Gerador de Número Aleatório</h1>
    </header>    
    
    <section>
        
        
        <?php
        
        if (isset($_GET['gerar'])) {
            $numero = rand(0, 100);
            print "<p>Gerando um número aleatório entre 0 e 100.</p>";
            print "<p>Número gerado é: <strong>$numero</strong></p>";
        }
        ?>
        <form method="get">
            <button type="submit" name="gerar">Gerar Número</button>
        </form>

    </section>

    


</body>
</html>