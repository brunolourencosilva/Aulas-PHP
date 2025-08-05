<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meu Primeiro PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Envie sua mensagem</h1>

    <form method="POST" action="processo.php">
        
        <label>Digite sua mensagem:</label><br>

        <!-- Campo de texto onde o usuario digita--> 
         <input type="text" name="mensagem" required>

        <!-- Botão para enviar-->
         <button type="submit">Enviar</button>
    </form>
</body>
</htmo>