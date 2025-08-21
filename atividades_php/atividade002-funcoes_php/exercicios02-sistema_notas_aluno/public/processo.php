<?php
session_start();

// Inicializa o array de alunos na sessão
if (!isset($_SESSION['alunos'])) {
    $_SESSION['alunos'] = [];
}
// Função que calcula a média e retorna a situação do aluno
function calcularSituacao($nota1, $nota2, $nota3, $nota4) {
    // Calcula a média das 4 notas
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    // Determina a situação de acordo com a média
    if ($media >= 15) {
        return ["media" => $media, "situacao" => "Aprovado"];
    } elseif ($media >= 10) {
        return ["media" => $media, "situacao" => "Recuperação"];
    } else {
        return ["media" => $media, "situacao" => "Reprovado"];
    }
}

// Captura os dados do formulário enviados via POST
$nome   = $_POST['nomeAluno'] ?? '';
$nota1  = isset($_POST['nota1']) ? (float) $_POST['nota1'] : 0;
$nota2  = isset($_POST['nota2']) ? (float) $_POST['nota2'] : 0;
$nota3  = isset($_POST['nota3']) ? (float) $_POST['nota3'] : 0;
$nota4  = isset($_POST['nota4']) ? (float) $_POST['nota4'] : 0;

// Se o formulário foi enviado, calcula o resultado
$resultado = null;
if (!empty($nome)) {
    $resultado = calcularSituacao($nota1, $nota2, $nota3, $nota4);
}

// Adiciona no array de alunos
$_SESSION['alunos'][] = [
    "nome" => $nome,
    "situacao" => $resultado
];

function exibir($resultado, $nome){
    if (!empty($_SESSION['alunos'])) {
        foreach ($_SESSION['alunos'] as $aluno) {
            echo "<p><strong>Aluno:</strong> {$aluno['nome']}</p>";
            echo "<p><strong>Média:</strong> " . number_format($aluno['media'], 2, ',', '.') . "</p>";
            echo "<p><strong>Situação:</strong> {$aluno['situacao']}</p>";
            echo "<hr>";
        }
    } else {
        echo "<p>Nenhum aluno cadastrado.</p>";
    }

    echo '<a href="index.php">Cadastrar novo aluno</a> | ';
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado - Sistema de Notas</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Resultado do Aluno</h1>
    </header>

    <main>
        <div>
            <form class="formulario" method="POST" action="../index.php">
                <?php exibir($resultado,$nome) ?>
                <button type="submit">Cadastrar Novo Aluno</button>
            </form>
        </div>
    </main>
</body>
</html>
