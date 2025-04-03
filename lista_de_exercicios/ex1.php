<?php
$alunos = [
    [
        'nome' => 'Yasmim Merces',
        'rm' => '20241010333',
        'foto' => './yas.png',
        'telefone' => '(11) 98765-4321'
    ],
    [
        'nome' => 'Gabriela Fabricio',
        'rm' => '234567',
        'foto' => './gabi.png',
        'telefone' => '(11) 92345-6789'
    ],
    [
        'nome' => 'Theo Carvalho',
        'rm' => '345678',
        'foto' => './theo.png',
        'telefone' => '(11) 91234-5678'
    ],
    [
        'nome' => 'Rayssa Nascimento',
        'rm' => '456789',
        'foto' => './yssaa.png',
        'telefone' => '(11) 99876-5432'
    ]
];

foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno['nome'] . "<br>";
    echo "RM: " . $aluno['rm'] . "<br>";
    echo "Foto: <img src='" . $aluno['foto'] . "' alt='" . $aluno['nome'] . "'><br>";
    echo "Telefone: " . $aluno['telefone'] . "<br><br>";
}
?>
