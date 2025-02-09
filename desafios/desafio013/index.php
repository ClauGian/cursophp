<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13 Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body> 

    <main>
        <h1 class="titulos">Caixa Eletrônico</h1>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label>Qual valor deseja sacar? (R$)</label>
            <input type="number" name="saque" min="0" step="5" required>
            <label>Notas disponíveis: R$ 100, - R$ 50, - R$ 10, - R$ 5</label><br>
            <button type="submit">Sacar</button>
        </form>
    </main>

    <section>       

        <article>
            <?php
                $vlr_saque = $_GET["saque"];
                if (isset($_GET["saque"])) {
                    $saque = (int)$_GET["saque"];

                    //Cálculo das notas

                    $cem = floor($saque / (100));
                    $saque %= (100);
                    $cinquenta = floor($saque / (50));
                    $saque %= (50);
                    $dez = floor($saque / (10));
                    $saque %= (10);
                    $cinco = floor($saque / 5);
                    $saque %= 5;

                    // Exibir os resultados

                    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);


                    echo "<h1 style='font-size: 28px;'>Saque de " . numfmt_format_currency($padrao, $vlr_saque, "BRL") . " realizado!</h1>";

                    /*
                    echo "<p><ul><li><img src='imagens/nota100.png' alt='Nota de 100 reais' width='100'> → X $cem</li></p>";

                    echo "<p><li><img src='imagens/nota50.png' alt='Nota de 50 reais' width='100'> → X $cinquenta</li></p>";

                    echo "<p><li><img src='imagens/nota10.png' alt='Nota de 10 reais' width='100'> → X $dez</li></p>";

                    echo "<p><li><img src='imagens/nota5.png' alt='Nota de 5 reais' width='100'> → X $cinco</li></ul></p>";
                    */

                    if ($cem > 0) {
                        echo "<p><ul><li><img src='imagens/nota100.png' alt='Nota de 100 reais' width='100'> → X $cem</li></ul></p>";
                    }
                    
                    if ($cinquenta > 0) {
                        echo "<p><ul><li><img src='imagens/nota50.png' alt='Nota de 50 reais' width='100'> → X $cinquenta</li></ul></p>";
                    }
                    
                    if ($dez > 0) {
                        echo "<p><ul><li><img src='imagens/nota10.png' alt='Nota de 10 reais' width='100'> → X $dez</li></ul></p>";
                    }
                    
                    if ($cinco > 0) {
                        echo "<p><ul><li><img src='imagens/nota5.png' alt='Nota de 5 reais' width='100'> → X $cinco</li></ul></p>";
                    }
                        
                }                    
               
            ?>
        </article>
    </section>

</body>
</html>
