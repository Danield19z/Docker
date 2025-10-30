<?php
// Programa fet per Daniel Torres
// Data: 16/10/2023
// Versio: 2.1
// El codi diu si es parell o imparell
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = intval($_POST["num"]);

    if ($num % 2 == 0) {
        echo "El número és parell.";
    } else {
        echo "El número és imparell.";
    }
} else {
?>
<form method="post">
    Introdueix un número: <input type="text" name="num">
    <input type="submit" value="Comprovar">
</form>
<?php
}
?>

