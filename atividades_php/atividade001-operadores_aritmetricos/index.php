<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>formulario</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<header>
    <h1>Calculadora: Operadores Aritmétricos</h1>
</header>

<body>
    <main>

        <div class="caixa">
            <form id="meuFormulario" method="POST" action="resultado.php">

                <label for="valor1">Digite o primeiro numero:</label>
                <input type="number" id="valor1" name="valor" required><br>

                <label for="valor2">Digite o segundo numero:</label>
                <input type="number" id="valor2" name="valor" required><br>

                <label for="Operador">Escolha a operação:</label>
                <select name="Operador" id="Operador">
                    <option value="selecionar">--Selecione--</option>
                    <option value="soma">Soma(+)</option>
                    <option value="subtracao">Subtração(-)</option>
                    <option value="multplicacao">multiplicação(x)</option>
                    <option value="divisao">Divisão(÷)</option>
                </select>
                <button id="btnCalcular">Calcular</button>
            </form>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>
</html>