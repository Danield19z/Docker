<?php
// Programa fet per Daniel Torres
// Data: 16/10/2023
// Versió: 2.1
// Et diu si és major d'edat o menor d'edat
echo "Introdueix la teva edat: ";
$edat = (int) trim(fgets(STDIN));

if ($edat >= 18) {
    echo "Ets major d'edat\n";
} else {
    echo "Ets menor d'edat\n";
}
?>