<?php
// Programa fet per Daniel Torres
// Data: 16/10/2023
// Versio: 2.1
// Di si està aprovat o suspès

$num1 = (int) readline("Introdueix la nota: "); // Variable que demanarà la nota

if ($num1 >= 5) { // Condició per saber si està aprovat o suspès
    echo "Aprovat\n"; // Text que apareix si està aprovat
} else {
    echo "Suspès\n"; // Text que apareix si està suspès
}
?>