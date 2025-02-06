<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
                     
            $num = $_GET["numero"];
            $antec = $num - 1;
            $suces = $num + 1;
            print "<p>O número escolhido foi: <strong>$num</strong>.</p>";
            print "<p>O seu número antecessor é <strong>$antec</strong>.";
            print "<p>O seu número sucessor é <strong>$suces</strong>.";    
        ?>
        <p class="voltar"><a href="javascript:history.go(-1)">← VOLTAR</a></p>
    </main>

    
</body>
</html>