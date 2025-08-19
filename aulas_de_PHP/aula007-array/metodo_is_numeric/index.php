Soma das notas: 40
<?php
echo '<hr>';

echo '<h2> 1 - Extract </h2>';

// Criação de um array associativo com nome do aluno e quatro notas
$alunos = [
    'aluno' => 'Maria',
    'Nota1' => 10,
    'Nota2' => 10,
    'Nota3' => 10,
    'Nota4' => 10,
];

// Exibe o array original
echo "<pre>";
print_r($alunos);
echo "</pre>";

// Inicializa a variavel que armazenara a soma das notas
$soma_notas = 0;
// Loop que pecorre o array inteiro
foreach ($alunos as $chave => $valor){
    // Verificar se o valor atual é numérico (para somar)
    if(is_numeric($valor)){
        $soma_notas += $valor;
    }
}
// Mostra a soma das notas
echo "<hr>";
print_r("Soma de notas:". $soma_notas);
echo "<hr>";
?>
