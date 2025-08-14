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
        <section>
            <h2>Estrutura FOR</h2>
            <div class="caixa">
                <?php
                    // incluie o arquivo PHP que contem as funções
                    // em seguida,executa a função que exibe o loop FOR
                    include "public/processo.php";
                    exibirFor();
                ?>
            </div>
        </section>
        <!-- Seção que exibe loop WHILE -->
        <section>
            <h2>Estrutura WHILE</h2>
            <div class="caixa">
                <?php
                    // Chama a função que exibe o loop wHILE
                    exibirWhile();
                ?>
            </div>
        </section>

        <!-- Seção que exibe loop FOREACH -->
        <section>
            <h2>Estrutura FOREACH</h2>
            <div class="caixa">
                <?php
                    // Chama a função que exibe o loop FOREACH
                    exibirForeach();
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>Exemplo didatico de PHP &copy; 2025</p>
    </footer>
</body>
</hmlt>

