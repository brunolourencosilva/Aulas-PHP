<?php
session_start(); // Inicia sessão para verificar se ja esta logado

// Se ja estiver logado, redireciona para área restrita
if (isset($_SESSION['usuario'])){
    header("Location: restrita.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login Sessão</title>
</head>
<body>
    <h1>Login</h1>

    <!-- Exibe mensagem de erro se existir -->
    <?php if (isset($_SESSION['erro'])):?>
        <p style="color:red;"><?php echo $_SESSION['erro']; unset($_SESSION['erro']);?></p>
    <?php endif; ?>

    <!-- Formulario envia para valida.php -->
    <form action="valida.php" method="post">
        <label>Usuario:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="senha" required><br><br>

        <button type="submit" name="senha" required>enviar</button>
    </form>
</body>
</hmlt>