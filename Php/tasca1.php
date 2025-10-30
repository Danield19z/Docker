<?php
// Programa per Daniel Torres
// Data: 16/10/2023
// Versió: 2.1

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];

    if (!is_numeric($num1)) {
        echo "Error: No has introduït un número vàlid.";
    } else {
        $num1 = intval($num1);
        if ($num1 > 0) {
            echo "El número és més gran que zero.";
        } elseif ($num1 < 0) {
            echo "El número és més petit que zero.";
        } else {
            echo "El número és zero.";
        }
    }
} else {
?>
<form method="post">
    Introdueix un número: <input type="text" name="num1">
    <input type="submit" value="Comprovar">
</form>
<?php
}
?>
