<?php
header("Content-Type: application/json");
include(".../conexao/conexao.php");

$dados = json_decode(file_get_contents("php://input"),true);

/**
 * Extrai os valores id e concluida do array e froça a conversão para inteiros,
 * evitando inserção de valores invalidos ou maliciosos.
 */
$id = (int)$dados["id"];
$concluida = (int)$dados["concluida"];
?>