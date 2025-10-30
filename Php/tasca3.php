<?php
// Programa fet per Daniel Torres
// Data: 16/10/2023
// Versió: 2.1
// El que fa és dir quin número és més gran de tres números que li dones

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = (int) $_POST["num1"];
    $num2 = (int) $_POST["num2"];
    $num3 = (int) $_POST["num3"];

    $max = $num1;
    if ($num2 > $max) {
        $max = $num2;
    }
    if ($num3 > $max) {
        $max = $num3;
    }

    echo "El número més gran és: $max";
} else {
?>
<form method="post">
    Introdueix el primer número: <input type="number" name="num1"><br>
    Introdueix el segon número: <input type="number" name="num2"><br>
    Introdueix el tercer número: <input type="number" name="num3"><br>
    <input type="submit" value="Comprovar">
</form>
<?php
}
?>
