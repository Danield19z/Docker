<?php
// Programa fet per Daniel Torres
// Data: 16/10/2023
// Versio: 2.1
// El codi diu si es parell o imparell

echo "Introdueix un numero: ";
$num = (int) trim(fgets(STDIN));

if ($num % 2 == 0) {
    echo "El numero es parell\n";
} else {
    echo "El numero es imparell\n";
}

?>