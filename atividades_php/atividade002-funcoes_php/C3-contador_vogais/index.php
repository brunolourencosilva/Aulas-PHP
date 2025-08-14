<!-- Desenvolva um programa que conte quantas vogais existem em uma frase digitada pelo usuário.

Crie uma função que receba a string e retorne a contagem de cada vogal.
Use laços de repetição para percorrer a string.
Exiba ao final quantas vezes cada vogal aparece. -->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contador de Vogais em uma Frase</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
        <h1>Contador de Vogais em uma Frase</h1>
    </header>

    <main>
        <div>
            <form class="formulario" method="POST" action="public/processo.php">

                <label for="frase">Digite uma frase:</label><br>
                <input id="frase" type="text" name="frase" required>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </main>

    <script src="assets/js/validacao.js"></script>
</body>
</html>