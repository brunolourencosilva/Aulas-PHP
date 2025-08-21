<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Tabela Tabuada</title>
        <link rel="stylesheet" href="css/estilo.css">

    </head>
    <body>
        <header>
            <h1>Tabela Tabuada</h1>
        </header>
        <main>
            <div>
                <form class="formulario">
                    <h2>Tabuada</h2>
                    <?php
                    // Verifica se o formulário foi enviado via método POST
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                        // Verifica se o campo 'entrada' foi enviado e converte para inteiro
                        $valor1 = isset($_POST['entrada']) ? (int)$_POST['entrada'] : null;
                        // Verifica se o campo 'operacao' foi enviado
                        $operacao = isset($_POST['operacao']) ? $_POST['operacao'] : null;

                        // Se algum dos valores não foi enviado, exibe mensagem de erro e encerra o script
                        if ($valor1 === null || $operacao === null) {
                            echo "Por favor, preencha todos os campos do formulário corretamente.";
                            exit;
                        }
                        function tabuada($valor1, $operacao) {
                            // Loop de 1 a 10 para realizar a tabuada
                            for ($i = 1; $i <= 10; $i++) {
                                // Seleciona a operação conforme o símbolo informado
                                switch ($operacao) {
                                    case '+':
                                        $resultado = $valor1 + $i;
                                        break;
                                    case '-':
                                        $resultado = $valor1 - $i;
                                        break;
                                    case '*':
                                        $resultado = $valor1 * $i;
                                        break;
                                    case '/':
                                        // Evita divisão por zero (neste caso, $i nunca será zero, mas mantém a verificação)
                                        if ($i != 0) {
                                            $resultado = number_format($valor1 / $i,2, '.', '');
                                        } else {
                                            $resultado = "Indefinido";
                                        }
                                        break;
                                    default:
                                        // Caso o símbolo da operação não seja reconhecido
                                        $resultado = "Operação inválida";
                                }
                                // Exibe o resultado da operação atual no formato: valor1 operacao i = resultado
                                echo "$valor1 $operacao $i = $resultado<br>";
                            }
                        }

                        // Chama a função para realizar a tabuada com os valores informados
                        tabuada($valor1, $operacao);
                    }
                    ?>
                    <a id="btnVoltar"href='../index.php'>Voltar</a>
                </form>
            </div>
        </main>
    </body>
</html>