<?php
// Função para verificar se um número é primo
function ehPrimo($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Captura o número enviado pelo formulário
$limite = isset($_POST['numeroPrimo']) ? (int) $_POST['numeroPrimo'] : 0;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Números Primos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Resultado dos Números Primos</h1>
    </header>
    <main>
        <div>
            <?php
            if ($limite > 0) {
                echo "<p>Números primos de 1 até $limite:</p>";
                echo "<p>";
                for ($n = 1; $n <= $limite; $n++) {
                    if (ehPrimo($n)) {
                        echo $n . " ";
                    }
                }
                echo "</p>";
            } else {
                echo "<p>Nenhum número válido foi informado.</p>";
            }
            ?>
        </div>

        <div>
            <form method="POST" action="../index.php">
                <button type="submit">Gerar Novamente</button>
            </form>
            <form method="POST" action="">
                <button type="submit" name="sair">Sair</button>
            </form>
        </div>

        <?php
        // Se o usuário clicar em "Sair"
        if (isset($_POST['sair'])) {
            echo "<p>Programa encerrado. Obrigado por usar!</p>";
            exit;
        }
        ?>
    </main>
</body>
</html>
     