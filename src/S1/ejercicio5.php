<?php
$numero = -5;

// Usando if-else
if ($numero > 0) {
    echo "$numero es positivo<br>";
} elseif ($numero < 0) {
    echo "$numero es negativo<br>";
} else {
    echo "$numero es cero<br>";
}

// Usando switch-case
switch (true) {
    case ($numero > 0):
        echo "$numero es positivo";
        break;
    case ($numero < 0):
        echo "$numero es negativo";
        break;
    default:
        echo "$numero es cero";
}
?>
