<?php
$alunos = [
    [
        'nome' => 'Yasmim',
        'nota' => 10
    ],
    [
        'nome' => 'Thiago',
        'nota' => 5
    ]
    ];
    foreach ($alunos as $key => $estudante) {
       if($estudante['nota'] < 7)
       echo 'Aluno(a) ' . $estudante['nome'] .  ' esta Reprovado';
       else
       echo 'Aluno(a) ' . $estudante['nome'] .  ' esta Aprovado';
       echo '<br>';
    }




?>