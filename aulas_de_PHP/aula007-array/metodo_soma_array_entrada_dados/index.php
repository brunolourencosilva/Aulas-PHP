<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Alunos</title>
    <style>
        /* Define a fonte e o espaçamneto do corpo dap agina */
        body{
            font-family: Arial,sans-serif;
            margin: 40px;
        }
        /* Estiliza os campos de texto e numeros para ficarem mias legiveis */
        input[type="text"],input[type="number"]{
            padding: 8px;
            margin: 5px 0;
            width: 100%;
            max-width: 300px; /*Limita o tamanho maximo do campo*/
        }
        /*Estilizando o botão de enviar (submit)*/
        input[type="submit"]{
            padding: 10px 20px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Aluno</h1> <!-- Titulo principal da pagina-->
    <main>
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

        <?php
        // Verifica se o formulario foi enviado via metodo POST
        if ($_SERVER["REQUEST_METHOD"] === "POST"){

            // Cria um array associativo $aluno com os dados recebidos do formulario
            $aluno = [
                'nome' => $_POST['nome'], // PEga o nome digitado pelo usuario
                'Nota1' => (float) $_POST['nota1'], // Converter a nota 1 para numerp decimal
                'Nota2' => (float) $_POST['nota2'], // Converter a nota 2 para numerp decimal
                'Nota3' => (float) $_POST['nota3'], // Converter a nota 3 para numerp decimal
                'Nota4' => (float) $_POST['nota4'], // Converter a nota 4 para numerp decimal
            ]
            echo "<hr>";

            echo "<h2>Resultado:</h2>";

            // Exibe o nome do aluno, usando htmlspecialchars para evitar problemas de segunraça
            echo "<h3>Aluno: ". htmlspecialchars($aluno['nome']). "</h3>";

            // iniciativa as variaveis para soma das notas e contagem da quantidade de notas
            $soma_notas = 0;
            $qtd_notas = 0;

            // Loop que pecorre cada elemento do array $aluno
            foreach ($aluno as $chaves => $valor){
                // Verifica se a cahve NÂO é "nome" e se o valor é numerico (nota)
                if ($chave !== 'nome' && is_numeric($valor)){
                    // Exibe o nome da nota e o valor digitado
                    echo "$chave: $valor<br>";

                    //Soma o valor da nota á variavel $soma_notas
                    $soma_notas +=$valor;

                    // Increementa quantidade de notas contadas
                    $qtd_nota++;
                }
            }

            // Calcula a media das notas dividindo a soma pela quantidade
            $media = $soma_notas / $qtd_notas;

            // Exibe a soma da notas
            echo "<br><strong>Soma das Notas: </strong> $soma_notas<br>";

            // Exibe a media formatada com 2 casas decimais e virugla como separador decimal
            echo "<strong>Media:</strong>". number_format($media,2,',','.');
        }
        ?>
    </main>
</body>
</hmlt>