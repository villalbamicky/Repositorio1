<?php
//Crear la variable
$x = 10;
echo "<p> Variable: $x </p>";
//Operaciones
echo "Suma: ". ($x += 5) . "<br>";
echo "Resta: " . ($x -= 3) . "<br>";
echo "Multiplicacion: " . ($x *= 2) . "<br>";
echo "División: " . ($x /= 4) . "<br>";
echo "Módulo: " . ($x %= 3) . "<br>";

echo $x;

?>