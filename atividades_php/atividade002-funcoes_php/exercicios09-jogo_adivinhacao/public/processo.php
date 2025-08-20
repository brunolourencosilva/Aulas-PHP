<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Captura o palpite enviado
        $entrada = $_POST['palpite'];
        if ($entrada < 0){
        }

        // Se ainda não existir número na sessão, gera um
        if (!isset($_SESSION['numero_aleatorio'])) {
            $_SESSION['numero_aleatorio'] = rand(1, 100);
            $_SESSION['tentativas'] = 0;
        }
        // Conta tentativas
        $_SESSION['tentativas']++;
        $numero_aleatorio = $_SESSION['numero_aleatorio'];
    }
    function validaTentativas($entrada,$numero_aleatorio){
        if ($entrada == $numero_aleatorio) {
            echo "<p>Parabéns! Você acertou o número $numero_aleatorio em {$_SESSION['tentativas']} tentativas.</p>";
            // Reinicia o jogo
            session_destroy();
        } elseif ($entrada < $numero_aleatorio) {
            echo "<p>O número é MAIOR que $entrada.</p>";
            
        } else {
            echo "<p>O número é MENOR que $entrada.</p>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Jogo de Adivinhação</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Jogo de Adivinhação</h1>
    </header>
    <main>
        <form class="formulario" method="POST">
            <?php
                validaTentativas($entrada,$numero_aleatorio);
            ?>
            <a id="btnVoltar"href='../index.php'>Voltar</a>
        </form>
    </main>
</body>
</html>
