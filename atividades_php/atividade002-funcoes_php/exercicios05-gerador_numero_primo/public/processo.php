<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerador de Números Primos</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
        <h1>Gerador de Números Primos</h1>
    </header>

    <main>
        <div>
            <form class="formulario" method="POST">
                <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $numPrimo = isset($_POST['numeroPrimo']) ? $_POST['numeroPrimo'] : '';
                    }

                ?>
            </form>
        </div>
    </main>

    <script src="assets/js/validacao.js"></script>
</body>
</html>