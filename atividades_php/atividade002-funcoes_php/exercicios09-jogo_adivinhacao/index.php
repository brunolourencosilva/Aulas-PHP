<!-- Crie um jogo onde o computador gera um número aleatório de 1 a 100 e o usuário deve adivinhar.

Crie uma função que valide o palpite e retorne se o número é maior, menor ou correto.
Use laços de repetição para permitir várias tentativas.
Mostre ao final quantas tentativas o jogador precisou para acertar. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Jogo de Adivinhação</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
        <h1>Jogo de Adivinhação</h1>
    </header>

    <main>
        <div>
            <form class="formulario" method="POST" action="public/processo.php">
                <label for="palpite">Digite um palpite entre 0 a 100:</label><br>
                <input type="number" name="palpite" required>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </main>
</body>
</hmlt>

