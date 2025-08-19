<?php
session_start();

// Inicializa o array de alunos na sessão,se ainda não existir
if (!isset($_SESSION['alunos'])){
    $_SESSION['alunos'] = [];
}

// Verifica se o formulario foi enviado via metodo POST
if ($_SERVER["REQUEST_METHOD"] === "POST"){
// Cria um array associativo $aluno com os dados recebidos do formulario
    $novo_aluno = [
    'nome' => $_POST['nome'], // PEga o nome digitado pelo usuario
    'Nota1' => (float) $_POST['nota1'], // Converter a nota 1 para numerp decimal
    'Nota2' => (float) $_POST['nota2'], // Converter a nota 2 para numerp decimal
    'Nota3' => (float) $_POST['nota3'], // Converter a nota 3 para numerp decimal
    'Nota4' => (float) $_POST['nota4'], // Converter a nota 4 para numerp decimal
    ];

    // Adiciona á lista na sessão
    $_SESSION['alunos'][] = $novo_aluno;
}

// Se desejar limpar a lista, descomente;
// session_destry();
// $_SESSION['alunos'] = [];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Alunos</title>
    <style>
        body{ font-family: Arial; margin: 40px}
        input[type="text"],input[type="number"]{padding: 8px;margin: 5px 0;width: 100%;max-width: 300px;}
        input[type="submit"]{padding:  10px 20px; margin-top:15px;}
        hr{margin: 30px 0;}
    </style>
</head>
    <body>
        <h1>Cadastro de Aluno (com sesion)</h1>
        <form method="POST">
            <label>Nome do Aluno:</label><br>
            <!-- Campo para digitar o nome, obrigatorio (required) -->
            <input type="text" name="nome" required><br>

            <label>Nota 1:</label><br>
            <!-- campo para digitar a nota 1, aceita numeros decimais,obrigatorio -->
            <input type="number" name="nota1" step="0.01" required><br>

            <label>Nota 2:</label><br>
            <input type="number" name="nota2" step="0.01" required><br>
            
            <label>Nota 3:</label><br>
            <input type="number" name="nota3" step="0.01" required><br>
            
            <label>Nota 4:</label><br>
            <input type="number" name="nota4" step="0.01" required><br>

            <!-- Botão para enviar o formulario -->
            <input type="submit" value="Cadastrar">
        </form>
        <?php if (!empty($_SESSION['alunos'])): ?>
            <hr>
            <h2>Lista de Alunos Cadastrados</h2>
            <?php foreach ($_SESSION['alunos'] as $aluno): ?>
                <h3><?= htmlspecialchars($aluno['nome'])?></h3>
                <ul>
                    <li>Nota 1: <?= $aluno['Nota1']?></li>
                    <li>Nota 2: <?= $aluno['Nota2']?></li>
                    <li>Nota 3: <?= $aluno['Nota3']?></li>
                    <li>Nota 4: <?= $aluno['Nota4']?></li>
                    <?php
                        $soma = $aluno['Nota1'] + $aluno['Nota2'] + $aluno['Nota3'] + $aluno['Nota4'];
                        $media = $soma / 4;
                    ?>
                    <li><strong>Soma:</strong> <?= $soma?> </li>
                    <li><strong>Media:</strong> <?= number_format($media, 2, ',','.')?></li>
                </ul>
                <hr>
            <?php endforeach;?>
        <?php endif;?>
    </body>
</html>