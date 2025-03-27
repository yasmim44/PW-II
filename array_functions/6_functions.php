<?php
$alunos = [
    'Yasmim',
    'Theo',
    'Rayssa',
    "Gabi"
];

dizerOla($alunos);

function dizerOla($estudantes){
    foreach ($estudantes as $index => $estudante) {
        echo "<h1>$estudante</h1>";
    }
}

?>