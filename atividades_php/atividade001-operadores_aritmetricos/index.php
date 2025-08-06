<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora: Operadores Aritméticos</title>
    <link rel="stylesheet" href="assets/css/estilo.css">
</head>
<body>
    <h1>Calculadora: Operadores Aritméticos</h1>

    <div class="caixa">
        <form id="formCalc" method="POST" action="resultado.php">
            <label for="num1">Digite o primeiro número:</label>
            <input type="number" id="num1" name="num1">

            <label for="num2">Digite o segundo número:</label>
            <input type="number" id="num2" name="num2">

            <label for="operacao">Escolha a operação:</label>
            <select id="operacao" name="operacao">
                <option value="">--Selecione--</option>
                <option value="soma">Soma (+)</option>
                <option value="subtracao">Subtração (-)</option>
                <option value="multiplicacao">Multiplicação (×)</option>
                <option value="divisao">Divisão (÷)</option>
            </select>

            <button type="submit">Calcular</button>
        </form>
    </div>

    <script src="assets/js/validacao.js"></script>
</body>
</html>
