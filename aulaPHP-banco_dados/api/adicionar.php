<?php
/**
 * Define que a resposta do servidor sera enviada no formato JSON,
 * para que o JavaScript saiba interpretar os dados.
 */
header("Content-Type: application/json");

/**
 * inclui o arquivo de conexão com o banco de dados,
 * que contem as credenciais e a configuração do objeto $conn.
 */
include(".../conexao/conexao.php");

/**
 * LE o corpo da requisição HTTP (enviado via feth no JavaScript)
 * e converte de JSON para array associativa em PHP.
 */
$dados = json_decode(file_get_contents("php://input"), true);

/**
 * 
 */
?>