<?php
$numeros = [0, 2, 0, 5, 0, 7, 8, 0, 1, 4];

$iguaisAZero = 0;
$diferentesDeZero = 0;

foreach ($numeros as $num) {
    if ($num === 0) {
        $iguaisAZero++;
    } else {
        $diferentesDeZero++;
    }
}

echo "Existem $iguaisAZero números iguais a 0 e $diferentesDeZero números diferentes de 0.";
?>
