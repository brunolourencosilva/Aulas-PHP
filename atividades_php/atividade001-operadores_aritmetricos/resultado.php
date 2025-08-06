<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Calculadora</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<header>
    <h1>Resultado da operação</h1>
</header>

<body>
    <div class="caixa">
        <?php
            if (isset($_POST["num1"], $_POST["num2"], $_POST["operacao"])) {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operacao = $_POST["operacao"];

                if ($num1 === '' || $num2 === '' || $operacao === '') {
                    echo "<p>Todos os campos são obrigatórios.</p>";
                    echo "<a href='index.php'>Voltar</a>";
                    exit;
                }

                switch ($operacao) {
                    case 'soma':
                        $resultado = $num1 + $num2;
                        $simbolo = '+';
                        break;
                    case 'subtracao':
                        $resultado = $num1 - $num2;
                        $simbolo = '-';
                        break;
                    case 'multiplicacao':
                        $resultado = $num1 * $num2;
                        $simbolo = '×';
                        break;
                    case 'divisao':
                        if ($num2 == 0) {
                            echo "<p>Erro: divisão por zero não é permitida.</p>";
                            echo "<a href='index.php'>Voltar</a>";
                            exit;
                        }
                        $resultado = $num1 / $num2;
                        $simbolo = '÷';
                        break;
                    default:
                        echo "<p>Operação inválida.</p>";
                        echo "<a href='index.php'>Voltar</a>";
                        exit;
                }

                echo "<p>O resultado é: <strong>{$num1} {$simbolo} {$num2} = {$resultado}</strong></p>";
                echo "<a href='index.php'>Fazer outro cálculo</a>";
            } else {
                echo "<p>Acesso inválido.</p>";
            }
?>
