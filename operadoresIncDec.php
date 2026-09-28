<?php
// Asignamos el valor inicial 
$numero = 10;

// Valor inicial
echo "<p>Inicial: $numero</p>";

// Preincremento (++$numero incrementa ANTES de imprimir)
echo "Preincremento: " . ++$numero;
echo "<br>";
echo "Valor actual: " . $numero;
echo "<br><br>";

// Postincremento ($numero++ imprime y LUEGO incrementa)
echo "Postincremento: " . $numero++;
echo "<br>";
echo "Valor actual: " . $numero;
echo "<br><br>";

// Predecremento (--$numero resta ANTES de imprimir)
echo "Predecremento: " . --$numero;
echo "<br>";
echo "Valor actual: " . $numero;
echo "<br><br>";

// Postdecremento ($numero-- imprime y LUEGO resta)
echo "Postdecremento: " . $numero--;
echo "<br>";
echo "Valor final: " . $numero;
?>