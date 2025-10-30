<?php
// Programa fet per Daniel Torres
// Data: 16/10/2023
// Versió: 2.1
// Diu si està aprovat o suspès

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = (int) $_POST["nota"];

    if ($num1 >= 5) {
        echo "Aprovat";
    } else {
        echo "Suspès";
    }
} else {
?>
<form method="post">
    Introdueix la nota: <input type="number" name="nota" required>
    <input type="submit" value="Comprovar">
</form>
<?php
}
?>
