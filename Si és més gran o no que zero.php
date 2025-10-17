<?php
// Programa fet per Daniel Torres
// Data: 16/10/2023
// Versio: 2.1
// Si és més gran o no que zero
$num1 = intval(readline("Introdueix un número: ")); // Variable que demana un número
$num2 = 0; // Variable que té el valor de 0

if ($num1 > $num2) { // Condició que compara si num1 és més gran que num2
    echo "El número és més gran que zero.\n"; // Missatge si es compleix la condició
} else {
    echo "El número no és més gran que zero.\n"; // Missatge si no es compleix
}
?>