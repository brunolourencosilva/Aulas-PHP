
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
        <form class="formulario">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $aluno = isset($_POST['nomeAluno']);

                $varNota1 = isset($_POST['nota1']) ? floatval($_POST['nota1']) : 0;
                $varNota2 = isset($_POST['nota2']) ? floatval($_POST['nota2']) : 0;
                $varNota3 = isset($_POST['nota3']) ? floatval($_POST['nota3']) : 0;
                $varNota4 = isset($_POST['nota4']) ? floatval($_POST['nota4']) : 0;


                function calcularSituacao ($varNota1,$varNota2,$varNota3,$varNota4){
                    $resultado = $varNota1+$varNota2+$varNota3+$varNota4;
                    $media = $resultado / 4;

                    if $media >= 60{
                        $situacao = "Aprovado"
                        echo "Media do aluno = $media | Situacao do aluno: $situacao";
                    }elseif $media < 60
                    
                };
            
            calcularSituacao($varNota1, $varNota2, $varNota3, $varNota4);

            ?>
        </form>
    </main>

    <script src="assets/js/validacao.js"></script>
</body>
</html>