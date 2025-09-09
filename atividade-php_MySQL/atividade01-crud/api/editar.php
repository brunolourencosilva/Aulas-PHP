<?php 
header("Contente-Type: application/json");
include("../conexao/conexao.php");

// Recebe os dados do corpo da requisição
$dados = json_decode(file_get_contents("php://input"), true);
/**
 *  Extrai os valores id e concluida do array e o converte para inteiro,
 * garantindo segurança e evitando injeção de SQL atraves de tipos onespirados
 */
$id = (int)$dados["id"];

/** Extrai o novo titulo e aplica real_escape_string, que escapa
 * caracteres especiasi para evitar injeção de SQL */
$titulo = $conn->real_escape_string($dados["titulo"]);

/** Cria a query SQL que ataliza(Altera) o campo titulo da tabela
 *  tarefas para a linha com o id correpondente */
$sql = "UPDATE tarefas SET titulo = '$titulo' WHERE id = $id";

// Executa o comando SQL no banco de dados
$conn->query($sql);

// Retorna uma respota JSON ao cliente indicando que a operação foi concluida com sucesso.
echo json_decode(["status" => "ok"]);
?>