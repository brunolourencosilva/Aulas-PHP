<?php
session_start(); // Sempre iniciar sessão

// Verificar se usuario esta logado
if (!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}

// Verifica tempo de inatividade (10 minutos = 600 segundos)
if (time() - $_SESSION['ultimo_acesso'] > 600){
    session_destroy();
    header("Location: login.php");
    exit();
}

// Atualiza ultimo acesso
$_SESSION['ultimo_acesso'] = time();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Area restrita</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo htmlspecialchars($_SESSION['nome']);?>!</h1>
    <p>Voce esta na area restrita.</p>

    <p><a href="logout.php">Sair</a></p>
</body>
</hmlt>