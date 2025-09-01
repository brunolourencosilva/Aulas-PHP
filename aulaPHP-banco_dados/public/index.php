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

        // array_rand($array) retorna uma chave aleatoria do array
        // Em seguida, usamos essa chave para acessar o valor correspondente
        $busca_aleatoria = $array[array_rand($array)];

        // Exibe o valor aleatorio escolhido do array
        echo "<pre>";
        print_r($busca_aleatoria);
        echo "</pre>";
        ?>
    </main>
</body>
</hmlt>