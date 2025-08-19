<!-- Faça um programa que simule um caixa eletrônico, onde o usuário informa um valor para saque.

Crie uma função que calcule a quantidade de cada cédula (100, 50, 20, 10 e 5).
Use estruturas condicionais para decidir como entregar o menor número de cédulas.
Permita vários saques até o usuário encerrar o programa. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
        <h1>Simulador de Caixa Eletrônico</h1>
    </header>

    <main>
        <div>
            <form class="formulario" method="POST" action="public/processo.php">
                <label for="valor">Digite o valor para saque:</label>
                <input type="number" name="valor" id="valor" min="5" step="5" required>

                <button type="submit">Sacar</button>
            </form>
        </div>
    </main>
</body>
</html>



