<?php
$numeros = [5, -3, 0, 7, -1, -6, 9, 2, 0, -4];

echo "Números maiores que 0:<br>";
foreach ($numeros as $numero) {
    if ($numero > 0) {
        echo $numero . "<br>";
    }
}

echo "<br>Números menores que 0:<br>";
foreach ($numeros as $numero) {
    if ($numero < 0) {
        echo $numero . "<br>";
    }
}
?>
