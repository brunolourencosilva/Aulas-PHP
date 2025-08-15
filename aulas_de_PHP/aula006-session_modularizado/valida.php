<?php
session_start(); // Necessario para manpular variaveis de sessão
require 'usuario.php'; // Inclui nosso "banco de dados" de usuario

// Captura dados enviados pelo formulario
$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

// Variavel de controle
$login_valido = false;
$nome_usuario = '';

// Pecorre o array de usuario para verificar crendenciais
foreach ($usuarios as $u){
    if ($u['usuario'] === $usuario && $u['senha'] === $senha){
        $login_valido = true;
        $nome_usuario = $u['nome'];
        break;
    }
}

if ($login_valido){
    // Gera novo ID de sessão para segurança
    session_regenerate_id(true);

    // Armazena informaações na sessão
    $_SESSION['usuario'] = $usuario;
    $_SESSION['nome'] = $nome_usuario;
    $_SESSION['ultimo_acesso'] = time(); // Para controle de inatividade

    // Redireciona para area restrita
    header("Location: restrita.php");
    exit();
} else{
    // Guarda mensagem de erro e volta para login
    $_SESSION['erro'] = "Usuario ou senha invalido!";
    header("Location: login.php");
    exit();
}
?>