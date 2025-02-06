<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php

            // Analisar o número
            $num = $_GET["numero"];

            // Separando a parte inteira e a parte fracionária
            $parteInteira = floor($num);
            $parteFracionaria = $num - $parteInteira;

            // Garantir que a parte fracionária seja um número de ponto flutuante
            $parteFracionaria = (float) $parteFracionaria;

            // Exibindo os valores formatados
            echo "<p>Analisando o número " . number_format($num, 3, ',', '.') . " informado pelo usuário.</p>";

            echo "<ul>";
            echo "<li><p>A parte inteira do número é: " . number_format($parteInteira, 0, ',', '.') . "</p></li>";
            echo "<li><p>A parte fracionária do número é: " . number_format($parteFracionaria, 3, ',', '.') . "</p></li>";
            echo "</ul>";            

        ?>

        <p class="voltar"><a href="javascript:history.go(-1)">← VOLTAR</a></p>
    </main>

    
</body>
</html>