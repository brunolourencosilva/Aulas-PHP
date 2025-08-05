<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meu Primeiro PHP</title>
    <style>
        /* Estilizando a pagina*/
        body{
            font-family: Arial;
            background-color: #f0f0f0;
            text-align:center;
        }
        input,bitton{
            padding: 8px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>Bem-vindo ao php</h1>

    <!--
    Formulario HTML
    - method="GET": envia os dados pelo URL (ex: ?mensagem=texto)
    - action="": significa que o formulario sera enviado para a propria pagina
    -->

    <form method="GET" action="">
        <label>Digite sua mensagem:</label><br>

        <!-- Campo de texto onde o usuario digita--> 
         <input type="text" name="mensagem" required>

        <!-- Botão para enviar-->
         <button type="submit">Enviar</button>
    </form>

    <p>
        <?php
            // Inicio do codigo php

            // Verificar se existe uma mensagem enviado pelo formulario
            // Avariavel $_GET['mensagem'] pega o valor enviado na URL
            if (isset($_GET['mensagem'])){

                $mensagem = htmlspecialchars($_GET['mensagem']);

                echo "Voce digitou: <strong>$mensagem</strong>";
            } else {
                echo "Ola, mundo! Este é mue primeiro codigo em PHP.";
            }
        ?>
    </p>
</body>
</htmo>