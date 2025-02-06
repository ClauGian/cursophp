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
        
<!--         
        <?php
        
        if (isset($_GET['gerar'])) {
            $numero = mt_rand(0, 100);
            // A função 'rand()' é de 1950 - Linear Congretial Gererator
            // A função 'mt_rand()' é de 1997 - Mersenne Twister
            // A partir da versão PHP 7.1 a função 'rand()' é um simples apontamento para 'mt_rand()'
            // A função 'randon_int()' gera números aleatórios criptograficamente seguros.

            print "<p>Gerando um número aleatório entre 0 e 100.</p>";
            print "<p>Número gerado é: <strong>$numero</strong></p>";
        }
        ?>
        <form method="get">
            <button type="submit" name="gerar">Gerar Número</button>
        </form> 
-->

<!--Outra maneira de fazer a geração de números aleatórios-->

        <?php 
            
                $min = 0;
                $max = 100;
                $num = mt_rand($min, $max);

                echo "<p>Gerando um número aleatório entre <strong>$min e $max.</strong><br></p>";
                echo "<p>O número gerado foi:<strong> $num</strong></p>";
                    
        ?>
        <button onclick="javascript:document.location.reload()">Gerar Número</button>

    </section>

    


</body>
</html>