<?php
// Programa fet per Daniel Torres
// Data: 16/10/2023
// Versió: 2.1
// Et diu si són vocals o consonants

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lletra = strtolower(trim($_POST["lletra"]));

    if (strlen($lletra) !== 1 || !ctype_alpha($lletra)) {
        echo "Introdueix només una lletra vàlida.";
    } elseif (in_array($lletra, ['a', 'e', 'i', 'o', 'u'])) {
        echo "La lletra és una vocal.";
    } else {
        echo "La lletra és una consonant.";
    }
} else {
?>
<form method="post">
    Introdueix una lletra: <input type="text" name="lletra" maxlength="1" required>
    <input type="submit" value="Comprovar">
</form>
<?php
}
?>
