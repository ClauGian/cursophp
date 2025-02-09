<?php
$anoAtual = date("Y"); // Obtém o ano atual do sistema
$anoNascimento = isset($_POST['ano_nascimento']) ? (int)$_POST['ano_nascimento'] : '';
$anoReferencia = isset($_POST['ano_referencia']) ? (int)$_POST['ano_referencia'] : $anoAtual;
$idade = ($anoNascimento && $anoReferencia) ? ($anoReferencia - $anoNascimento) : '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Idade</title>
    <script>
        function calcularIdade() {
            let anoNascimento = document.getElementById('ano_nascimento').value;
            let anoReferencia = document.getElementById('ano_referencia').value;
            if (anoNascimento && anoReferencia) {
                document.getElementById('idade').innerText = "Idade em " + anoReferencia + ": " + (anoReferencia - anoNascimento) + " anos";
            }
        }
        
        function preencherAnoAtual() {
            document.getElementById('ano_referencia').value = new Date().getFullYear();
            calcularIdade();
        }
    </script>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="preencherAnoAtual()">
    

    <main>
        <h1 class="titulos">Calculadora de Idade</h1>
        
        <form method="POST" oninput="calcularIdade()">
            <label for="ano_nascimento">Ano de Nascimento:</label>
            <input type="number" name="ano_nascimento" id="ano_nascimento" value="<?= htmlspecialchars($anoNascimento) ?>" required>
            <label for="ano_referencia">Ano de Referência:</label>
            <input type="number" name="ano_referencia" id="ano_referencia" value="<?= htmlspecialchars($anoReferencia) ?>">
            <button type="submit">Calcular</button>
        </form>
    </main>

    <section>
        <h1 class="titulos">Resultado</h1>
        <article>
            <p id="idade">
                <?php if ($idade !== ''): ?>
                    Idade em <?= htmlspecialchars($anoReferencia) ?>: <strong><?= $idade ?> anos</strong>
                <?php endif; ?>
            </p>
        </article>
    </section>

</body>
</html>
