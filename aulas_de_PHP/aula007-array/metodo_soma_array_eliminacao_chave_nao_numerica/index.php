<?php
echo '<h2>2 - Dois alunos com 4 notas</h2>';
$alunos = [
    [
        'nome' => 'Maria',
        'Nota1' => 10,
        'Nota2' => 9,
        'Nota3' => 8,
        'Nota4' => 10,

    ],
    [
        'nome' => 'João',
        'Nota1' => 7,
        'Nota2' => 8,
        'Nota3' => 6,
        'Nota4' => 9,

    ]
];
// Percorre cada aluno no array
foreach ($alunos as $aluno) {
    // Captura o nome do aluno
    $nome = $aluno['nome'];

    // Inicializa variaveis para soma das notas e contagem
    $soma_notas = 0;
    $qtd_notas = 0;

    // Pecorre os dados de cada aluno (cahve e valores)
    foreach($aluno as $chave =>$valor){
        // Ignora a chave 'nome' e soma apenas valores numericos
        if ($chave !== 'nome' && is_numeric($valor)){
            $soma_notas += $valor; // soma das notas
            $sqd_notas++;          // conta quantas notas foram somadas
        }
    }

    // calcula a media
    $media = $soma_notas / $sqd_notas
}
?>
