<?php
// Função que calcula as cédulas necessárias
function calcularCedulas($valor) {
    $cedulas = [100, 50, 20, 10, 5];
    $resultado = [];

    foreach ($cedulas as $cedula) {
        if ($valor >= $cedula) {
            $quantidade = intdiv($valor, $cedula);
            $valor %= $cedula;
            $resultado[$cedula] = $quantidade;
        }
    }

    return $resultado;
}

// Entrada de dados
$valor = $_POST['valor'] ?? null;
$saques = [];

// Estrutura de repetição (permite múltiplos saques por sessão)
session_start();
if (!isset($_SESSION['historico'])) {
    $_SESSION['historico'] = [];
}

if ($valor !== null && $valor >= 5) {
    $resultado = calcularCedulas($valor);
    $_SESSION['historico'][] = [
        'valor' => $valor,
        'resultado' => $resultado
    ];
}

$saques = $_SESSION['historico'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Saque</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Resultado do Saque</h1>
    </header>

    <main>
        <?php if ($valor === null || $valor < 5): ?>
            <p>Por favor, informe um valor válido (mínimo R$ 5).</p>
        <?php endif; ?>

        <?php if (!empty($saques)): ?>
            <div class="resultado">
                <?php foreach ($saques as $saque): ?>
                    <h3>Saque de R$ <?= $saque['valor'] ?></h3>
                    <ul>
                        <?php foreach ($saque['resultado'] as $cedula => $quantidade): ?>
                            <li><?= $quantidade ?> nota(s) de R$ <?= $cedula ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <a href="../index.php" class="voltar">Novo Saque</a>
        <form method="POST" action="reset.php">
            <button type="submit" class="limpar">Encerrar Programa</button>
        </form>
    </main>

    <footer>
        <p>Exemplo didático de PHP &copy; 2025</p>
    </footer>
</body>
</html>
