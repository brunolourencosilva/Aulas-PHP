<?php
session_start();

// Inicializa o array de alunos na sessão
if (!isset($_SESSION['alunos'])) {
    $_SESSION['alunos'] = [];
}

// Captura os dados do formulário enviados via POST
$nome   = $_POST['nomeAluno'] ?? '';
$nota1  = isset($_POST['nota1']) ? (float) $_POST['nota1'] : 0;
$nota2  = isset($_POST['nota2']) ? (float) $_POST['nota2'] : 0;
$nota3  = isset($_POST['nota3']) ? (float) $_POST['nota3'] : 0;
$nota4  = isset($_POST['nota4']) ? (float) $_POST['nota4'] : 0;

// Função que calcula a média e retorna a situação do aluno
function calcularSituacao($nota1, $nota2, $nota3, $nota4) {
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    if ($media >= 15) {
        $situacao = "Aprovado";
    } elseif ($media >= 10) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    return ["media" => $media, "situacao" => $situacao];
}

// Limpar sessão se o botão "apagar" for clicado
if (isset($_POST['apagar'])) {
    session_unset();
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']); // Recarrega a página
    exit();
}

// Se o formulário foi enviado, calcula o resultado e adiciona no array de alunos
if (!empty($nome)) {
    $resultado = calcularSituacao($nota1, $nota2, $nota3, $nota4);

    $_SESSION['alunos'][] = [
        "nome" => $nome,
        "situacao" => $resultado['situacao'],
        "media" => $resultado['media']
    ];
}

// Função para exibir alunos
function exibirAlunos() {
    if (!empty($_SESSION['alunos'])) {
        foreach ($_SESSION['alunos'] as $aluno) {
            echo "<p><strong>Aluno:</strong> {$aluno['nome']}</p>";
            echo "<p><strong>Situação:</strong> {$aluno['situacao']}</p>";
            echo "<p><strong>Média:</strong> {$aluno['media']}</p><hr>";
        }
    } else {
        echo "<p>Nenhum aluno cadastrado.</p>";
    }
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
            <form class="formulario" method="POST" action="">
                <a href="../index.php">Cadastrar Novo Aluno</a>

                <button type="submit" name="apagar">Apagar Lista / Encerrar Sessão</button>
            </form>
            <!-- =============== Fazer css dessa classe ===============-->
            <form class="listaAluno"> 
                <?php exibirAlunos(); ?>
            </form>
        </div>
    </main>
</body>
</html>
