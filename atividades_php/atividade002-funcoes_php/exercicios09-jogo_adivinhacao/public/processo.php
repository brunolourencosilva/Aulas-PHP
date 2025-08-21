<?php
session_start();

// Inicializa o número aleatório e tentativas
if (!isset($_SESSION['numero_sorteado'])) {
    $_SESSION['numero_sorteado'] = rand(1, 100);
    $_SESSION['tentativas'] = 0;
}

function validaTentativas($entrada,$numero_aleatorio){ // PASSAR ESSA FUNÃO PARA O JAVASCRIPT
    $mensagem = "";
    // Loop de validação usando while
    if (isset($_POST['palpite'])) {
        $palpite = (int)$_POST['palpite'];
        $_SESSION['tentativas']++;
        
        // Aqui o while será apenas simbólico para processar "até acertar"
        $acertou = false;
        while (!$acertou) {
            if ($palpite < $_SESSION['numero_sorteado']) {
                $mensagem = "Seu palpite: $palpite. O número é maior!";
                break; // sai do while pois no navegador só processa um palpite por requisição
            } elseif ($palpite > $_SESSION['numero_sorteado']) {
                $mensagem = "Seu palpite: $palpite. O número é menor!";
                break;
            } else {
                $mensagem = "Parabéns! Você acertou o número {$_SESSION['numero_sorteado']} em {$_SESSION['tentativas']} tentativas.";
                unset($_SESSION['numero_sorteado']);
                unset($_SESSION['tentativas']);
                $acertou = true;
                break;
            }
        }
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
            <?php if($mensagem) validaTentativas($entrada,$numero_aleatorio); ?>
            <label>Digite um palpite entre 1 e 100:</label><br>
            <input type="number" name="palpite" min="1" required>
            <button type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>
