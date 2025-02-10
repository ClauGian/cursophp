<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <?php 
        $saque = $_GET["sacar"] ?? 0;
        
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sacar">Qual o valor do saque? (R$)<sup>*</sup></label><br>
            <input type="number" name="sacar" id="sacar" value="<?=$saque?>" required>
            <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$ 100, R$ 50, R$ 20, R$ 10, R$ 5, R$ 2</p><br>
            <button type="submit">Sacar</button>
        </form>

    </main>

    <section>       
        
        <article>
            <?php 
            $cem = floor ($saque / 100);
            $saque %= 100;
            $cinquenta = floor ($saque / 50);
            $saque %= 50;
            $vinte = floor ($saque / 20);
            $saque %= 20;
            $dez = floor ($saque / 10);
            $saque %= 10;
            $cinco = floor ($saque / 5);
            $saque %= 5;
            $dois = floor ($saque / 2);
            $saque %= 2;

            $soma = $cem * 100 + $cinquenta * 50 + $vinte * 20 + $dez * 10 + $cinco * 5 + $dois * 2;

            ?>
            
            <h1 style="font-size: 1.7em;">Valor do saque realizado: R$ <?=number_format($soma, 2, ",", ".")?> </h1>
           
            <ul>
                <li><img src="imagens/nota100.png" alt="Nota de cem reais"><span class="valor-nota"> &nbsp→ X <strong>&nbsp<?=$cem?></span></strong></li>

                <li><img src="imagens/nota50.png" alt="Nota de cinquenta reais"><span class="valor-nota"> &nbsp→ X <strong>&nbsp<?=$cinquenta?></span></strong></li>

                <li><img src="imagens/nota20.png" alt="Nota de vinte reais"> <span class="valor-nota"> &nbsp→ X <strong>&nbsp<?=$vinte?></span></strong></li>

                <li><img src="imagens/nota10.png" alt="Nota de dez reais"> <span class="valor-nota"> &nbsp→ X <strong>&nbsp<?=$dez?></span></strong></li>

                <li><img src="imagens/nota5.png" alt="Nota de cinco reais"><span class="valor-nota"> &nbsp→ X <strong>&nbsp<?=$cinco?></span></strong></li>

                <li><img src="imagens/nota2.png" alt="Nota de dois reais"><span class="valor-nota"> &nbsp→ X <strong>&nbsp<?=$dois?></span></strong></li>

            </ul>
            <p>Saldo restante: R$ <strong><?=number_format($saque, 2, ',', '.') ?></strong> reais.</p>
            
        </article>
        
    </section>
</body>
</html>

