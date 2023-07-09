<?php

$valor1 = 10.0;
$valor2 = 10;


var_dump($valor1 > $valor2);
echo "<br>";

var_dump($valor1 < $valor2);
echo "<br>";

var_dump($valor1 >= $valor2);
echo "<br>";

var_dump($valor1 <= $valor2);
echo "<br>";

var_dump($valor1 == $valor2);
echo "<br>";

var_dump($valor1 === $valor2);
echo "<br>";

var_dump($valor1 != $valor2);
echo "<br>";

//compara se são diferentes e tipo
var_dump($valor1 !== $valor2);
echo "<br>";

//////////////////////////////////


$a = 10;
$b = 10;

//operador que devolve 3 resultados
// se a for maior: devolve 1
// se forem iguais: devolve 0
// se b for maior: devolve -1
var_dump($a <=> $b);
?>