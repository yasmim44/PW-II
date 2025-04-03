<?php
$etec = [
    'Desenvolvimento de Sistemas' => [
        'Programação Mobile' => [
            'Módulo I',
            'Módulo II'
        ],
        'Programação Web' => [
            'Módulo I',
            'Módulo II',
            'Módulo III',
            'Módulo IV'
        ],
        'Técnicas Avançadas de Programação de Algoritmos',
        'Inglês' => [
            'Módulo I',
            'Módulo II',
            'Módulo III'
        ]
    ],
    'Administração' => [
        'Recursos Humanos' => [
            'Módulo I',
            'Módulo II'
        ],
        'Gestão de Pessoas',
        'Teoria da Administração',
        'Inglês' => [
            'Módulo I'
        ]
    ]
];


foreach ($etec as $curso => $disciplinas) {
    echo "<strong>☆ $curso</strong><br>";
    foreach ($disciplinas as $disciplina => $modulos) {
       
        if (is_string($modulos)) {
            echo "• $modulos<br>";
        } else {
            echo "<strong>- $disciplina</strong><br>";
            foreach ($modulos as $modulo) {
                echo " • $modulo<br>";
            }
        }
    }
}
?>
