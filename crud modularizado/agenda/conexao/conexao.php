<?php
// Configurações do banco de dados
$host = "localhost";   // endereço do servidor do banco (geralmente localhost)
$usuario = "root";     // usuário do banco de dados
$senha = "";           // senha do banco de dados
$banco = "agenda_db";  // nome do banco de dados que será usado

// Cria uma conexão com o banco de dados usando a classe mysqli
// new mysqli(host, usuário, senha, banco)
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica se ocorreu algum erro na conexão
// Se houver erro, interrompe o script e mostra a mensagem
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
    // die() encerra o script imediatamente e exibe a mensagem
}

// Define o charset da conexão para UTF-8
// Garante que caracteres especiais (acentos, emojis etc.) sejam gravados corretamente
$conn->set_charset("utf8mb4");
?>
