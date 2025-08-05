<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>formulario</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Envie sua mensagem</h1>

    <div class="caixa">
        <form id="meuFormulario" method="POST" action="precesso.php">
            <label>Digite sua mensagem:</label>
            <input type="text" id="mensagem" nome="mensagem" required><br>
            <button type="submit">Enviar</button>
        </form>
    </div>

    <script src="js/script.js"></script>
</body>
</html>