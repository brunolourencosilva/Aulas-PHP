<?php
require_once '../conexao/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome   = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $stmt = $conn->prepare("INSERT INTO clientes (nome, cidade, estado) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $cidade, $estado);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    header("Location: index.php");
    exit;
}

include '../includes/header.php';
?>

<main>
    <h2>Cadastrar Cliente</h2>

    <form method="post">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br>

        <label>Cidade:</label><br>
        <input type="text" name="cidade" required><br>

        <label>Estado:</label><br>
        <input type="text" name="estado" maxlength="2" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>
</main>

<?php include '../includes/footer.php'; ?>
