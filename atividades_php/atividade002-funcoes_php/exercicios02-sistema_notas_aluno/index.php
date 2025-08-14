<!-- 2. Sistema de Notas de Alunos
Crie um programa que leia o nome de um aluno e quatro notas.

Crie uma função que calcule a média e retorne se o aluno está Aprovado, em Recuperação ou Reprovado.
Use estruturas condicionais para determinar o resultado.
Permita que o programa cadastre vários alunos, mostrando o resultado individual de cada um. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Notas de Alunos</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
        <h1>Sistema de Notas de Alunos</h1>
    </header>

    <main>
        <div>
            <form class="formulario" method="POST" action="public/processo.php">

                <label for="nomeAluno">Digite o nome do aluno</label><br>
                <input id="nomeAluno" type="text" name="nomeAluno" min="0" max="25" required>

                <div id="notas">

                    <label for="nota1">Digite a 1ª nota</label><br>
                    <input id="nota1" type="number" name="nota1" min="0" max="25" required>
                    
                    <label for="nota2">Digite a 2ª nota</label><br>
                    <input id="nota2" type="number" name="nota2"min="0" max="25"  required>
                    
                    <label for="nota3">Digite a 3ª nota</label><br>
                    <input id="nota3" type="number" name="nota3" min="0" max="25" required>
                    
                    <label for="nota4">Digite a 4ª nota</label><br>
                    <input id="nota4" type="number" name="nota4" min="0" max="25" required>
                    
                </div>
                    <button type="submit">Enviar</button>
            </form>
        </div>
    </main>

    <script src="assets/js/validacao.js"></script>
</body>
</html>