<?php
// Programa fet per Daniel Torres
// Data: 16/10/2023
// Versió: 2.1
// Et diu si són vocals o consonants

// Demana una lletra a l'usuari
echo "Introdueix una lletra: ";
$lletra = trim(fgets(STDIN));

// Comprova si la lletra és una vocal
if (in_array($lletra, ['a', 'e', 'i', 'o', 'u'])) {
    echo "La lletra és una vocal\n"; // Missatge si és vocal
} else {
    echo "La lletra és una consonant\n"; // Missatge si és consonant
}
?>