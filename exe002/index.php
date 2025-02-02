<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos de PHP</title>
</head>
<body>
    <h1>Exemplos de PHP</h1>
    <?
        date_default_timezone_set("America/Sao_Paulo");
        print "Hoje é dia " . date("d/M/Y") . "<br>";
        print "<br>";
        print "Agora são " . date("G:i:s  T");
    ?>
    
</body>
</html>