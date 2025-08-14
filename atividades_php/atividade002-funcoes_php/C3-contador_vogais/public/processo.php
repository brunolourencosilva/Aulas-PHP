<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Contador de Vogais em uma Frase</title>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <header>
            <h1>Contador de Vogais em uma Frase</h1>
        </header>

        <main>
            <form class="formulario" method="POST">
                <?php
                // Verifica se o formulário foi enviado via método POST
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                    // Pega o valor digitado no campo "frase" (se não existir, define como string vazia)
                    $entradaFrase = isset($_POST['frase']) ? $_POST['frase'] : '';

                    // Converte toda a frase para minúsculas para facilitar a contagem
                    $fraseLower = strtolower($entradaFrase);

                    // Inicializa contadores para cada vogal
                    $a = 0;
                    $e = 0;
                    $i_vogal = 0; // Evita conflito de nome com a variável $i do loop
                    $o = 0;
                    $u = 0;

                    // Percorre cada caractere da frase
                    for ($pos = 0; $pos < strlen($fraseLower); $pos++) {

                        // Verifica se o caractere atual é 'a'
                        if ($fraseLower[$pos] === 'a') {
                            $a++;
                        }
                        // Verifica se é 'e'
                        elseif ($fraseLower[$pos] === 'e') {
                            $e++;
                        }
                        // Verifica se é 'i'
                        elseif ($fraseLower[$pos] === 'i') {
                            $i_vogal++;
                        }
                        // Verifica se é 'o'
                        elseif ($fraseLower[$pos] === 'o') {
                            $o++;
                        }
                        // Verifica se é 'u'
                        elseif ($fraseLower[$pos] === 'u') {
                            $u++;
                        }
                    }

                    // Soma todas as vogais para obter o total
                    $total = $a + $e + $i_vogal + $o + $u;

                    // Exibe o resultado final
                    echo "A frase '$entradaFrase' tem $total vogais.<br>";
                    echo "Vogais A = $a<br>";
                    echo "Vogais E = $e<br>";
                    echo "Vogais I = $i_vogal<br>";
                    echo "Vogais O = $o<br>";
                    echo "Vogais U = $u<br>";
                }
                ?>

                <a id="btnVoltar"href='../index.php'>Voltar</a>
            </form>
        </main>
    </body>
</html>
