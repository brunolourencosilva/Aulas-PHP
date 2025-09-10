<?php
require_once '../conexao/conexao.php';
include '../includes/header.php';

// Busca clientes no banco
$result = $conn->query("SELECT * FROM clientes ORDER BY id DESC");
?>

<main>
    <h2>Lista de Clientes</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Ações</th>
        </tr>

        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nome'] ?></td>
            <td><?= $row['cidade'] ?></td>
            <td><?= $row['estado'] ?></td>
            <td>
                <a href="editar.php?id=<?= $row['id'] ?>">Editar</a> |
                <a href="excluir.php?id=<?= $row['id'] ?>" 
                   onclick="return confirm('Deseja realmente excluir?')">Excluir</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</main>

<?php
$conn->close();
include '../includes/footer.php';
?>
