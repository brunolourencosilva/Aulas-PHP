<!-- Crie um programa que converta temperaturas entre Celsius, Fahrenheit e Kelvin.

Crie funções separadas para cada tipo de conversão.
Peça ao usuário qual conversão deseja fazer e qual valor deseja converter.
Utilize condicionais para escolher a função correta.
Permita que o usuário repita quantas conversões quiser. -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Temperaturas</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
        <h1>Conversor de Temperaturas</h1>
    </header>

    <main>
        <div>
            <form class="formulario" method="POST" action="public/processo.php">
                <label for="valor">Digite o valor da temperatura:</label>
                <input type="number" step="0.01" name="valor" id="valor" required>

                <label for="conversao">Escolha a conversão:</label>
                <select name="conversao" id="conversao" required>
                    <option value="c_f">Celsius → Fahrenheit</option>
                    <option value="c_k">Celsius → Kelvin</option>
                    <option value="f_c">Fahrenheit → Celsius</option>
                    <option value="f_k">Fahrenheit → Kelvin</option>
                    <option value="k_c">Kelvin → Celsius</option>
                    <option value="k_f">Kelvin → Fahrenheit</option>
                </select>

                <button type="submit">Converter</button>
            </form>
        </div>
    </main>
        <p>Exemplo didático de PHP &copy; 2025</p>
    </footer>
</body>
</html>


