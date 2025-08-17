<!-- Crie um programa que gere todos os números primos de 1 até um número informado pelo usuário.

Crie uma função que verifique se um número é primo.
Use um laço de repetição para percorrer todos os números e exiba apenas os primos.
O programa deve perguntar se o usuário deseja gerar novamente ou sair. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerador de Números Primos</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
        <h1>Gerador de Números Primos</h1>
    </header>

    <main>
        <div>
            <form class="formulario" method="POST" action="public/processo.php">

                <label for="numeroPrimo">Informe um numero:</label><br>
                <input type="number" name="numeroPrimo" required>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </main>

    <script src="assets/js/validacao.js"></script>
</body>
</html>
