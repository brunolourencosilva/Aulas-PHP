<!-- Desenvolva um sistema simples para cadastrar produtos (nome e preço).

Use arrays para armazenar os produtos.
Crie funções para:
• Adicionar novo produto
• Listar todos os produtos
• Pesquisar produto por nome
• Utilize laços e condicionais para navegação em um menu de opções. -->

<?php
session_start();

// Inicializa array de produtos se não existir
if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = [];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
        <h1>Cadastro de Produtos</h1>
    </header>

    <main>
        <div class="formulario">
            <form method="POST" action="public/processo.php">
                <label for="acao">Escolha a ação:</label>
                <select name="acao" id="acao" required>
                    <option value="adicionar">Adicionar Produto</option>
                    <option value="pesquisar">Pesquisar Produto</option>
                    <option value="listar">Listar Todos</option>
                </select>

                <div id="campos">
                    <label for="nome">Nome do Produto:</label>
                    <input type="text" name="nome" id="nome">

                    <label for="preco">Preço:</label>
                    <input type="number" name="preco" id="preco" step="0.01">

                    <label for="pesquisa">Pesquisar por nome:</label>
                    <input type="text" name="pesquisa" id="pesquisa">
                </div>

                <button type="submit">Executar</button>
            </form>
        </div>
    </main>
</body>
</html>

