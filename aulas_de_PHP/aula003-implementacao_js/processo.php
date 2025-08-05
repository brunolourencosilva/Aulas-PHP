<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Processando mensagem</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Resultado:</h1>

    <p>
        <?php
        if (isset($_POST['mensagem'])){
            $mensagem = htmlspecialchars($_POST['mensagem']);

            echo "Voce digitou: <strong>$mensagem</strong>";

        }else {
            echo "Nenhuma mensagem foi recebido.";
        }
        ?>
    </p>

    <a href="index.php">Voltar</a>
</body>
</html>