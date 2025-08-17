<?php
session_start();

// Inicializa array de produtos se não existir
if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = [];
}

// Captura dados do formulário
$acao = $_POST['acao'] ?? '';
$nome = $_POST['nome'] ?? '';
$preco = $_POST['preco'] ?? '';
$pesquisa = $_POST['pesquisa'] ?? '';

$msg = "";
$produtosExibir = [];

// ============================
// Lógica das ações
// ============================
if ($acao === "adicionar") {
    if ($nome !== "" && $preco !== "") {
        $_SESSION['produtos'][] = ['nome' => $nome, 'preco' => $preco];
        $msg = "Produto '$nome' adicionado com sucesso!";
    } else {
        $msg = "Preencha o nome e o preço para adicionar um produto.";
    }
} elseif ($acao === "pesquisar") {
    foreach ($_SESSION['produtos'] as $p) {
        if (stripos($p['nome'], $pesquisa) !== false) {
            $produtosExibir[] = $p;
        }
    }
    $msg = !empty($produtosExibir) ? "Produtos encontrados:" : "Nenhum produto encontrado.";
} elseif ($acao === "listar") {
    $produtosExibir = $_SESSION['produtos'];
    $msg = !empty($produtosExibir) ? "Lista de todos os produtos:" : "Nenhum produto cadastrado.";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Produtos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Resultado - Produtos</h1>
    </header>

    <main>
        <div class="formulario">
            <p><?php echo $msg; ?></p>

            <?php if (!empty($produtosExibir)) : ?>
                <ul>
                    <?php foreach ($produtosExibir as $p) : ?>
                        <li><strong><?php echo $p['nome']; ?></strong> - R$ <?php echo $p['preco']; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <a href="../index.php"><button>Voltar</button></a>
        </div>
    </main>
</body>
</html>