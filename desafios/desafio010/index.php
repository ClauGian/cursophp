<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10 Calculando a Idade</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body> 
    <?php 
        $ano = date("Y");
        $anonasc = $_GET["nasc"] ?? '2000';
        $anoatual = $_GET["ano"] ?? $ano;
    ?>   

    <main>
        <h1 class="titulos">Calculando a Idade</h1>
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="nascimento">Ano de Nascimento</label>
            <input type="number" name="nasc" id="nasc" min="1900" max="<?=$ano?>" value="<?=$anonasc?>"required >
            <label for="ano">Quer saber sua idade em que ano? (Atualmente estamos em <strong><?=$ano?></strong>).</label>  
            <input type="number" name="ano" id="ano" value="<?=$ano?>"> 
            
            <button type="submit">Calcular</button>

        </form>
        
    </main>    
        
    <section>
        <h1 class="titulos">Resultado</h1>
        
        <article>
            <?php
                
                $idade = $anoatual - $anonasc;

                Echo "Quem nasceu em $anonasc tem $idade em $anoatual."               
                
            ?>
        </article>
     
    </section>    

</body>
</html>