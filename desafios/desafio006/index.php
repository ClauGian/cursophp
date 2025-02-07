<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06 Divisão</title>
</head>
<body>
    <?php
        function desenharDivisao($dividendo, $divisor) {
            if ($divisor == 0) {
                echo "Erro: Divisão por zero não é permitida.";
                return;
            }

            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;
            $espacos = strlen($dividendo) + 2;

            echo "  $dividendo │    $divisor<br>";
            echo "  " . str_repeat(" ",5) strlen($dividendo))("__", strlen($quociente)) . "<br>";            
            echo "  $resto";
            echo "  |  ";
            echo "     $quociente<br>";
        }

    // Exemplo de uso
    desenharDivisao(789, 4);
    ?>

</body>
</html>