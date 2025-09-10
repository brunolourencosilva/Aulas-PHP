<?php
require_once '../conexao/conexao.php';

// Pega o ID via GET
$id = $_GET['id'] ?? 0;

// Busca cliente específico
$result = $conn->query("SELECT * FROM clientes WHERE id=$id");
$cliente = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome   = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $stmt = $conn->prepare("UPDATE clientes SET nome=?, cidade=?, estado=? WHERE id=?");
    $stmt->bind_param("sssi", $nome, $cidade, $estado, $id);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    header("Location: index.php");
    exit;
}

include '../includes/header.php';
?>

<main>
    <h2>Editar Cliente</h2>

    <form method="post">
        <label>Nome:</label><br>
        <input type="text" name="nome" value="<?= $cliente['nome'] ?>" required><br>

        <label>Cidade:</label><br>
        <input type="text" name="cidade" value="<?= $cliente['cidade'] ?>" required><br>

        <label>Estado:</label><br>
        <input type="text" name="estado" value="<?= $cliente['estado'] ?>" maxlength="2" required><br><br>

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include '../includes/footer.php'; ?>
