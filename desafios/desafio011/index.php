<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11 Calculando Reajuste</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body> 
    
    <main>
        <h1 class="titulos">Reajustador de Preços</h1>

        <?php
            $percentual = 50; // Exemplo de variável
        ?>
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="valor_base">Preço do Produto (R$)</label>
            <input type="number" name="valor_base" step="0.01" required>
            
            <label for="percentual">Qual será o percentual de reajuste? (Atualmente:<strong> <span id="percentualValor"><?= $percentual ?> %</strong></span>)</label>
            <input class="range" type="range" name="percentual" min="0" max="100" step="1" value="<?= $percentual ?>" oninput="atualizarPorcentagem(this.value)">
                        
            <button type="submit">Calcular</button>

        </form>        
        
    </main>    
        
    <section>
        <h1 class="titulos">Resultado do Reajuste</h1>
        
        <article>
            <?php
                $valor_base = isset($_GET["valor_base"]) ? (float)$_GET['valor_base'] : 0;
                $percentual = isset($_GET["percentual"]) ? (int)$_GET['percentual'] : 0;
                $vlr_reajustado = $valor_base + (($valor_base * $percentual) / 100);

                $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
                               
                Echo "<p>O produto com custo de <strong>" . numfmt_format_currency($padrao, $valor_base, "BRL") . "</strong> com <strong>reajuste de $percentual%</strong> passa a custar <strong>" . numfmt_format_currency($padrao, $vlr_reajustado, "BRL") . "</strong> a partir de agora.</p>";
                
                
            ?>
        </article>
     
    </section>
    <script>
        function atualizarPorcentagem(valor) {
            document.getElementById("percentualValor").innerText = valor + "%";
        }
    </script>    
        
</body>
</html>