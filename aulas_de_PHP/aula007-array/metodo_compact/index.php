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

        // Declaração de variaveis individuais
        $nome = 'Maria';
        $idade = 50;
        $peso = 50.5;

        // A função compact() cria um array associativo com base nas variaceis informadas
        // As chaves do array serão os nomes das variaveis ('nome' . 'idade' , 'peso')
        // E os valores serão os valores dessas variaveis
        $array = compact('nome' , 'idade' , 'peso');

        //Exibe o array resultante no navegador, formmatado para melhor visualização
        echo "<pre>";
            print_r($array); // Mostra o array: array ( [nome] => Maria [idade] => [peso] => 50.5)
        echo "</pre>";
        ?>
    </main>
</body>
</hmlt>