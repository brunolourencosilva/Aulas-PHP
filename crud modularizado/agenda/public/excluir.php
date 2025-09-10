<?php
require_once '../conexao/conexao.php';

$id = $_GET['id'] ?? 0;

$conn->query("DELETE FROM clientes WHERE id=$id");
$conn->close();

header("Location: index.php");
exit;
