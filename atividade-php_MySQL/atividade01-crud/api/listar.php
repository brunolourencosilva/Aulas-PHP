<?php
/**
 * Define que a respossta do servidor será enviada no formato JSON,
 * para que o JavaScript saiba interpretar os dados.
 */
header("Content-Type: application/json");

include("../conexao/conexao.php");
/**
 * Cria uma string com a introdução SQL para selecionar todas as
 * colunas da tabela tarefas, ordenando os registros do maior para o menor id.
 */
$sql = "SELECT * FROM tarefas ORDER BY id DESC";
/**
 * Executa a consulta SQL no banco de dados atraves da conexão $conn,
 * retornan o conjunto de resultados e armazenando-o em $result.
 */
$result = $conn->query($sql);

// Cria um array vazio que servira para armazenar todas as tarefas recuperadas do banco.
$tarefas = [];
/**
 * Pecorre cada linha do resultado da consulta.
 * transformando-a em um array associativo ($row), e adiciona cada tarefa ao array $tarefas.
 */
while($row = $result->fetch_assoc()){
    $tarefas[] = $row;
}
/**
 * Converte o array $ tarefas em uma string JSON e envia essa
 * resposta ao cliente (navegador ou aplicação que fez a requisição),
 */
echo json_encode($tarefas);
?>