<?php
$pessoa1 = [];

$pessoa1['nome1'] = 'Yasmim';
$pessoa1['sobrenome'] = 'bombom';
$pessoa1['idade'] = '16';


$pessoa2 = [];
$pessoa1['nome2'] = 'Thiago';
$pessoa1['sobrenome'] = 'Barbosa';
$pessoa1['idade'] = '17';

$lista_pessoas = [
    $pessoa1, 
    $pessoa2
];


echo "<h1> O nome é:" . $lista_pessoas[0]['nome1'] . "</h1>";




?>