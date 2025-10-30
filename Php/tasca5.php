<?php
// Programa fet per Daniel Torres
// Data: 16/10/2023
// Versió: 2.1
// Et diu si és major d'edat o menor d'edat

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edat = (int) $_POST["edat"];

    if ($edat >= 18) {
        echo "Ets major d'edat.";
    } else {
        echo "Ets menor d'edat.";
    }
} else {
?>
<form method="post">
    Introdueix la teva edat: <input type="number" name="edat" required>
    <input type="submit" value="Comprovar">
</form>
<?php
}
?>
