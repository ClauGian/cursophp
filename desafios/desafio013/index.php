<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <main>
        <h1 class="titulos">Caixa Eletrônico</h1>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label>Qual valor deseja sacar? (R$)</label>
            <input type="number" name="saque" min="2" step="1" value="<?=$saque?>" required>
            <label>Notas disponíveis: R$ 100, R$ 50, R$ 20, R$ 10, R$ 5, R$ 2</label><br>
            <button type="submit">Sacar</button>
        </form>
    </main>

    <section>       
        <article>
            <?php
                if (isset($_GET["saque"]) && is_numeric($_GET["saque"])) {
                    $saque = (int)$_GET["saque"];
                    $vlr_saque = $saque;

                    // Definição das notas disponíveis
                    $notas = [
                        100 => "nota100.png",
                        50  => "nota50.png",
                        20  => "nota20.png",
                        10  => "nota10.png",
                        5   => "nota5.png",
                        2   => "nota2.png",
                    ];

                    // Verifica se é possível sacar com as notas disponíveis
                    if ($saque < 2 || $saque === 3) {
                        echo "<h2 style='color: red;'>Erro: Não é possível sacar R$ $saque com as notas disponíveis.</h2>";
                        exit;
                    }

                    echo "<h1 style='font-size: 28px;'>Saque de R$ " . number_format($vlr_saque, 2, ',', '.') . " realizado!</h1>";

                    echo "<ul>";
                    foreach ($notas as $valor => $imagem) {
                        $quantidade = floor($saque / $valor);
                        $saque %= $valor;
                        if ($quantidade > 0) {
                            echo "<li><img src='imagens/$imagem' alt='Nota de $valor reais' width='100'> → X $quantidade</li>";
                        }
                    }
                    echo "</ul>";
                }
            ?>
        </article>
    </section>
</body>
</html>


