<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    <h1>Extraindo valores com extract()</h1>
    <main>

        <?php
        echo  '<hr>';
        echo '<h2> 1 - Extract </h2>'

        // criação de um array associativo com chave => valor
        $array = [
            'nome' => 'Maria',
            'idade' => 40,
            'peso' => 50.5
        ];
        // Exibe o array completo em um fromato legivel
        echo "<pre>";
        print_r($array);
        echo "</pre>";

        // A função extract() transforma as chaves do do array em variaveis
        // Exemplo: Cria as variaveis $nome,$idade e $peso
        print_r("Valor extraido: ".$nome);

        echo "<hr>"
        ?>
    </main>
</body>
</hmlt>