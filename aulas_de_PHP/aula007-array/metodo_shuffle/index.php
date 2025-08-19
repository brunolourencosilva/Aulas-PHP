<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--A função shuffle () só funciona corretamnete com arrays indexados (numericos)
        Quando voce usa shuffle() em um array associativo, o php:
        Descarta as chaves e reorganizar apenas os valores, conertendo o array em um array]
        indexado (com indeces numericos de 0 em diante)
    -->
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

        // Aplica a função shuffle() para embaralhar os elementos do array
        shuffle($array); // IMPORTANTE: isso remove as chaves associativas!!
        // Exibe o array apos o embaralhamento
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        ?>
    </main>
</body>
</hmlt>