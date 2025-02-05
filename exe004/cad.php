<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Arquivo de Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            
            //$nome = $_REQUEST["nome"]; É uma junção de super globais ($_GET, $_POST e $_COOKIES)
            
            $nome = $_GET["nome"];
            $sobrenome = $_GET["sobrenome"];
            print "<p>Muito prazer <strong>$nome $sobrenome</strong>! Este é meu site.";
                
        ?>
        <p><a href="javascript:history.go(-1)">>VOLTAR<</a></p>
    </main>

    
</body>
</html>