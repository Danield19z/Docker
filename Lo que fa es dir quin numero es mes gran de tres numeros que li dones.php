<?php
// Programa fet per Daniel Torres
// Data: 16/10/2023
// Versio: 2.1
// Lo que fa es dir quin numero es mes gran de tres numeros que li dones

echo "Introdueix el primer numero: ";
$num1 = (int) trim(fgets(STDIN));
echo "Introdueix el segon numero: ";
$num2 = (int) trim(fgets(STDIN));
echo "Introdueix el tercer numero: ";
$num3 = (int) trim(fgets(STDIN));

$max = $num1;
if ($num2 > $max)
    $max = $num2;
if ($num3 > $max)
    $max = $num3;

echo "El numero mes gran es: " . $max . "\n";

?>