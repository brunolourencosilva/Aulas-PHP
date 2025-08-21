<?php
session_start();

// Inicializa o número aleatório e tentativas apenas na primeira execução
if (!isset($_SESSION['numero_sorteado'])) {
    $_SESSION['numero_sorteado'] = rand(1, 100);
    $_SESSION['tentativas'] = 0;
}

// Função que valida o palpite
function validaTentativa($palpite, $numero_sorteado) {
    if ($palpite < $numero_sorteado) {
        return "Seu palpite ($palpite) é MENOR que o número.";
    } elseif ($palpite > $numero_sorteado) {
        return "Seu palpite ($palpite) é MAIOR que o número.";
    } else {
        return "Parabéns! Você acertou o número $numero_sorteado ";
    }
}

$mensagem = "";

if (isset($_POST['palpite'])) {
    $palpite = (int) $_POST['palpite'];
    $_SESSION['tentativas']++;

    // Laço de repetição: continua até acertar
    while (true) {
        $mensagem = validaTentativa($palpite, $_SESSION['numero_sorteado']);

        // Se acertou, encerra o jogo
        if ($palpite == $_SESSION['numero_sorteado']) {
            $mensagem .= "<br>Você precisou de {$_SESSION['tentativas']} tentativas.";
            session_destroy(); // Reinicia o jogo em uma nova rodada
        }
        break; // Sai do while (pois cada palpite vem por requisição)
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
        <h1>Resultado da Tentativa</h1>
    </header>
    
    <main>
        <div>
            <form class="formulario" method="POST" action="public/processo.php">
    <p><?= $mensagem ?></p>
    <a href="../index.php">Voltar e tentar novamente</a>
            </form>
        <div>
    </main>
</body>
</html>
