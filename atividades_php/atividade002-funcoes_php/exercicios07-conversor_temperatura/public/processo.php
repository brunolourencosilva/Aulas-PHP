<?php
// Funções de conversão
function celsiusParaFahrenheit($c) {
    return ($c * 9/5) + 32;
}
function celsiusParaKelvin($c) {
    return $c + 273.15;
}
function fahrenheitParaCelsius($f) {
    return ($f - 32) * 5/9;
}
function fahrenheitParaKelvin($f) {
    return ($f - 32) * 5/9 + 273.15;
}
function kelvinParaCelsius($k) {
    return $k - 273.15;
}
function kelvinParaFahrenheit($k) {
    return ($k - 273.15) * 9/5 + 32;
}

// Entrada de dados
$valor = $_POST['valor'] ?? null;
$conversao = $_POST['conversao'] ?? null;

// Estrutura de repetição (simulação de permitir várias conversões)
$resultados = [];
for ($i = 0; $i < 1; $i++) {
    if ($valor !== null && $conversao !== null) {
        switch ($conversao) {
            case 'c_f':
                $resultados[] = "$valor °C = " . celsiusParaFahrenheit($valor) . " °F";
                break;
            case 'c_k':
                $resultados[] = "$valor °C = " . celsiusParaKelvin($valor) . " K";
                break;
            case 'f_c':
                $resultados[] = "$valor °F = " . fahrenheitParaCelsius($valor) . " °C";
                break;
            case 'f_k':
                $resultados[] = "$valor °F = " . fahrenheitParaKelvin($valor) . " K";
                break;
            case 'k_c':
                $resultados[] = "$valor K = " . kelvinParaCelsius($valor) . " °C";
                break;
            case 'k_f':
                $resultados[] = "$valor K = " . kelvinParaFahrenheit($valor) . " °F";
                break;
            default:
                $resultados[] = "Conversão inválida.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Conversão</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Resultado da Conversão</h1>
    </header>

    <main>
        <div class="resultado">
            <?php
            if (!empty($resultados)) {
                foreach ($resultados as $res) {
                    echo "<p>$res</p>";
                }
            } else {
                echo "<p>Nenhum valor foi informado.</p>";
            }
            ?>
        </div>

        <a href="../index.php" class="voltar">Nova Conversão</a>
    </main>

    <footer>
        <p>Exemplo didático de PHP &copy; 2025</p>
    </footer>
</body>
</html>
