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
            <label for="frase">Digite uma frase:</label><br>
            <input type="text" name="frase" id="frase" required>
            <button type="submit">Contar Vogais</button>
            
            <?php
            // Função que conta vogais em uma frase
            function contarVogais($frase) {
                // Converte para minúsculas
                $frase = strtolower($frase);
                
                // Inicializa contadores
                $contagem = [
                    'a' => 0,
                    'e' => 0,
                    'i' => 0,
                    'o' => 0,
                    'u' => 0
                ];
                
                // Repetição para percorrer a frase
                for ($pos = 0; $pos < strlen($frase); $pos++) {
                    $caractere = $frase[$pos];
                    
                    // Condicional: se for vogal, incrementa
                    if (array_key_exists($caractere, $contagem)) {
                        $contagem[$caractere]++;
                    }
                }
                
                return $contagem;
            }
            
            // Se o formulário foi enviado
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $entradaFrase = $_POST['frase'] ?? '';
                
                // Chama a função
                $resultado = contarVogais($entradaFrase);
                
                // Total de vogais
                $total = array_sum($resultado);
                
                // Exibe o resultado
                echo "<h3>Resultado:</h3>";
                echo "A frase '<strong>$entradaFrase</strong>' tem <strong>$total</strong> vogais.<br>";
                
                foreach ($resultado as $vogal => $qtd) {
                    echo "Vogais " . strtoupper($vogal) . " = $qtd<br>";
                }
            }
            ?>

            <a id="btnVoltar" href="../index.php">Voltar</a>
        </form>
    </main>
</body>
</html>

