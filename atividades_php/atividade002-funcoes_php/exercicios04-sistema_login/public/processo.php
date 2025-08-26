<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login Simples em PHP</title>
    <link rel="stylesheet" href="../public/css/estilo.css">


</head>
<body>
    <header>
        <h1>Sistema de Login</h1>
    </header>

    <main>
        <div >
            <form class="formulario" method="POST">
                <?php
                // Array simples com usuários e senhas
                $usuarios = [
                    "admin" => "1234",
                    "joao" => "senha1",
                    "maria" => "senha2"
                ];

                // Captura os dados enviados pelo formulário
                $usuario = $_POST['usuario'] ?? '';
                $senha   = $_POST['senha'] ?? '';

                // Função para validar login usando laço de repetição
                function validarLogin($usuario, $senha, $usuarios) {
                    foreach ($usuarios as $user => $pass) {
                        if ($usuario === $user && $senha === $pass) {
                            return true;
                        }
                    }
                    return false;
                }

                // Verifica se login é válido
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if (validarLogin($usuario, $senha, $usuarios)) {
                        echo "<h2>Bem-vindo, $usuario!</h2>";
                        echo '<a href="../index.php">Tentar novamente</a>';
                    } else {
                        echo "<h2>Usuário ou senha incorretos.</h2>";
                        echo '<a href="../index.php">Tentar novamente</a>';
                    }
                }
                ?>
            </form>
        </div>
    </main>
</body>
</html>