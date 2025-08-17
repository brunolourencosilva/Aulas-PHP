<!-- Implemente um programa de login em PHP.

Armazene um pequeno array com usuários e senhas.
Crie uma função para verificar se o login e a senha estão corretos.
Use estruturas condicionais para validar o acesso.
Permita três tentativas de login antes de encerrar o programa. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login Simples em PHP</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
        <h1>Sistema de Login</h1>
    </header>

    <main>
        <div >
            <form class="formulario" method="POST" action="public/processo.php">
                <label for="usuario">Usuário:</label><br>
                <input type="text" name="usuario" required><br>

                <label for="senha">Senha:</label><br>
                <input type="password" name="senha" required><br><br>

                <button type="submit">Entrar</button>
            </form>
        </div>
    </main>
</body>
</html>
