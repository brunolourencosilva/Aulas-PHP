<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabela Tabuada</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
        <h1>Tabela Tabuada</h1>
    </header>

    <main>
        <div>
            <form class="formulario" method="POST" action="public/processo.php">
                <h2>Tabuada</h2>
                
                <!-- Campo para o número base da tabuada -->
                <label for="entrada">Digite o número:</label><br>
                <input id="entrada" type="number" name="entrada" required>
                
                <!-- Seleção da operação matemática -->
                <label for="operacao">Escolha a operação:</label>
                <select id="operacao" name="operacao" required>
                    <option value="">--Selecione--</option>
                    <option value="+">Soma (+)</option>
                    <option value="-">Subtração (-)</option>
                    <option value="*">Multiplicação (*)</option>
                    <option value="/">Divisão (/)</option>
                </select>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </main>

    <script src="assets/js/validacao.js"></script>
</body>
</html>
