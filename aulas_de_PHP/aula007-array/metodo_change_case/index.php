<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    <header>
        <h1>Extraindo criando um array</h1>
    </header>
    <main>

        <?php
        echo '<hr>';

        echo '<h2> 1 - Extract </h2>';

        // Criação de um array com chaves em cases variados
        $array = [
            'Nome' => 'Maria',
            'idade' => 40,
            'PESO' => 50.5
        ];

        // Exibe o array original
        echo "<pre>";
        print_r($array);
        echo "</pre>";

        // Converte todas as chaves do array para minusculos (CASE_LOWER)
        $indice_minusculo = array_change_key_case($array, CASE_LOWER);

        // Exibe o array com chaves em minusculas
        echo "<pre>";
        echo "Indice Minusculo: <br>";
        print_r($indice_minusculo);
        echo "</pre>";

        // Cinverte todas as  chaves do array para miasculas (CASE_UPPER)
        $indice_maiusculo = array_change_key_case($array, CASE_UPPER);

        // Exibe o array com chaves em maiusculas
        echo "<pre>";
        echo "Indice Maiusculo: <br>";
        print_r($indice_maiusculo)
        echo "</pre>"
        ?>
    </main>
</body>
</hmlt>