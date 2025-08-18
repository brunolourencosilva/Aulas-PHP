<!-- Crie um programa que converta temperaturas entre Celsius, Fahrenheit e Kelvin.

Crie funções separadas para cada tipo de conversão.
Peça ao usuário qual conversão deseja fazer e qual valor deseja converter.
Utilize condicionais para escolher a função correta.
Permita que o usuário repita quantas conversões quiser. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exemplo de estruturas de repetição em PHP</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
        <h1>Exemplo de estruturas de Repetição</h1>
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

    <footer>
        <p>Exemplo didatico de PHP &copy; 2025</p>
    </footer>
</body>
</hmlt>

